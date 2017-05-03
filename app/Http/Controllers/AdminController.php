<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;

class AdminController extends Controller
{
    private $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
//        $this->extract->tuneSelection('slider')->sortBy('id','DESC');
    }

    public function getIndex(){
        return view('back.layout');
    }

    public function getTitular(){
        $block = $this->extract->getBlock('titular');
        return view('back.blocks.titular', [
            'block' => $block
        ]);
    }

    public function getStatistic(){
        $block = $this->extract->getBlock('statistic');
        return view('back.blocks.statistic', [
            'block' => $block
        ]);
    }

    public function getPrinciples(){
        $block = $this->extract->getBlock('principles');
        return view('back.blocks.principles', [
            'block' => $block
        ]);
    }

    public function getObjectives(){
        $block = $this->extract->getBlock('objectives');
        return view('back.blocks.objectives', [
            'block' => $block
        ]);
    }

    public function getLeaders(){
        $block = $this->extract->getBlock('leaders');
        return view('back.blocks.leaders', [
            'block' => $block
        ]);
    }

    public function getSupport(){
        $block = $this->extract->getBlock('support');
        return view('back.blocks.support', [
            'block' => $block
        ]);
    }

    public function getPlans(){
        $block = $this->extract->getBlock('plans');
        return view('back.blocks.plans', [
            'block' => $block
        ]);
    }

    public function getInformation(){
        $block = $this->extract->getBlock('information');
        return view('back.blocks.information', [
            'block' => $block
        ]);
    }

    public function getPackages(){
        $block = $this->extract->getBlock('packages');
        return view('back.blocks.packages', [
            'block' => $block
        ]);
    }

    public function getPackagesItem( $id ){
        $group_item = $this->extract->getGroupItem('package_type', $id);
        return view('back.groups.package_type.package_type', [
            'item' => $group_item
        ]);
    }

    public function getContact(){
        $block = $this->extract->getBlock('contact_us');
        return view('back.blocks.contact_us', [
            'block' => $block
        ]);
    }

    public function getFooter(){
        $block = $this->extract->getBlock('footer');
        return view('back.blocks.footer', [
            'block' => $block
        ]);
    }
}
