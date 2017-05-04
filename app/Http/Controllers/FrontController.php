<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Log;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;


class FrontController extends Controller
{
    private $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
        $footer = $this->extract->getBlock('footer');
        view()->share('footer', $footer);
    }


    public function getIndex(){
        $titular = $this->extract->getBlock('titular');
        $statistic = $this->extract->getBlock('statistic');
        $principles = $this->extract->getBlock('principles');
        $objectives = $this->extract->getBlock('objectives');
        $leaders = $this->extract->getBlock('leaders');
        $support = $this->extract->getBlock('support');
        $plans = $this->extract->getBlock('plans');
        $information = $this->extract->getBlock('information');
        $packages = $this->extract->getBlock('packages');
        $contact_us = $this->extract->getBlock('contact_us');
        return view('front.index.index', [
            'titular' => $titular,
            'statistic' => $statistic,
            'principles' => $principles,
            'objectives' => $objectives,
            'leaders' => $leaders,
            'support' => $support,
            'plans' => $plans,
            'information' => $information,
            'packages' => $packages,
            'contact_us' => $contact_us,
        ]);
        /*try {
            $products = $this->extract->getBlock('products');
            $guarantee = $this->extract->getBlock('guarantee');
        }
        catch (Exception $e) {
            abort(404);
        }
        return view('front.index.index', [
            'products' => $products,
            'guarantee' => $guarantee,
        ]);*/
    }
}