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
        $this->extract->tuneSelection('facts')->sortBy('id','DESC');
        $this->extract->tuneSelection('facts_in_fig')->sortBy('id','DESC');
        $this->extract->tuneSelection('principles_list')->sortBy('id','DESC');
        $this->extract->tuneSelection('objectives_list')->sortBy('id','DESC');
        $this->extract->tuneSelection('leaders_list')->sortBy('id','DESC');
        $this->extract->tuneSelection('support_list')->sortBy('id','DESC');
        $this->extract->tuneSelection('plans_list')->sortBy('id','DESC');
        $this->extract->tuneSelection('partners_list')->sortBy('id','DESC');
        $this->extract->tuneSelection('components_list')->sortBy('id','DESC');
        $this->extract->tuneSelection('our_partners_list')->sortBy('id','DESC');
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

    public function getIndexMeta(){
        $block = $this->extract->getBlock('titular');
        return view('back.blocks.index_meta', [
            'block' => $block
        ]);
    }

    public function getVolunteersPage(){
        $block = $this->extract->getBlock('for_volunteers');
        return view('back.blocks.for_volunteers', [
            'block' => $block
        ]);
    }

    public function getVolunteersPageItem( $id ){
        $group_item = $this->extract->getGroupItem('vol_info_page', $id);
        return view('back.groups.vol_info_page.vol_info_page', [
            'item' => $group_item,
        ]);
    }

    public function getPlayersPage(){
        $block = $this->extract->getBlock('for_players');
        return view('back.blocks.for_players', [
            'block' => $block
        ]);
    }

    public function getPlayersPageItem( $id ){
        $group_item = $this->extract->getGroupItem('pl_info_page', $id);
        return view('back.groups.pl_info_page.pl_info_page', [
            'item' => $group_item,
        ]);
    }

    public function getScripts(){
        $block = $this->extract->getBlock('scripts');
        return view('back.blocks.scripts', [
            'block' => $block
        ]);
    }

    public function getMails(){
        $sponsor_form = $this->extract->getBlock('sponsor_form');
        $become_sponsor_form = $this->extract->getBlock('become_sponsor_form');
        $become_volunteer_form = $this->extract->getBlock('become_volunteer_form');
        return view('back.blocks.mails', [
            'sponsor_form' => $sponsor_form,
            'become_sponsor_form' => $become_sponsor_form,
            'become_volunteer_form' => $become_volunteer_form,
        ]);
    }
}
