<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 17/11/2018
 * Time: 11:06
 */

namespace App\Http\Controllers;

use App\Http\Repository\CommandeRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Lenius\Basket\Facades\Basket;


class CommandeController
{
    protected $commandeRepository;

    function __construct(CommandeRepository $commandeRepository)
    {
        $this->commandeRepository = $commandeRepository;
    }

    public function addPost(Request $request)
    {
        Log::info("request checkout");
        Log::info($request);
        $commande = $this->commandeRepository->add(
            date("Y-m-d"),
            Basket::total(false),
            $request->input('adresse'),
            Auth::user()->id,
            Basket::contents());
        Log::info("basket1");
        Log::info(Basket::contents());
        Log::info("basket2");
        Log::info(Basket::contents(true));
        Basket::destroy();
        return redirect('/index');
    }

    public function addGet()
    {
        $commandes = $this->commandeRepository->getAll();
        return view('/checkout')->with('commandes', $commandes);
    }

    public function getAll()
    {
        $commande = $this->commandeRepository->getAll();
        return view('profile')->with('commande', $commande);
    }

    public function getAllCommandesWithUsers()
    {
        $commandes = $this->commandeRepository->getAllWithUsers();
        Log::info($commandes);
        return view('/admin/listecom')->with('commandes', $commandes);
    }

}
