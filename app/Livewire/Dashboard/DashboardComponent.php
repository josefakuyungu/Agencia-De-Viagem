<?php

namespace App\Livewire\Dashboard;
use App\Models\Custumer;
use App\Models\Menu;
use App\Models\Official;
use App\Models\Orderitem;
use App\Models\Payment;
use App\Models\Request;
use App\Models\Reserve;
use App\Models\Stock;
use App\Models\Supplier;
use App\Models\Table;
use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.dashboard-component',[
            "custumers" => $this->custumerCounter(),
            "officials" => $this->getofficial(),
            "menus" => $this->getmenu(),
            "request" => $this->getrequest(),
            "order" => $this->getorder(),
            "stock" => $this->getstock(),
            "suppliers" => $this->getsupplier(),
            "payments" => $this->getpayment(),
            "reserves" => $this->getreserve(),
            "tables" => $this->gettable(),
        ])->layout("layouts.dashboard.app");
        
    }

    public function custumerCounter(){
        try {
            return Custumer::count();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    


    public function getofficial  (){
        try {
            return Official::count();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }



    public function getmenu  (){
        try {
            return Menu::count();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function getrequest  (){
        try {
            return Request::count();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }


    public function getorder  (){
        try {
            return Orderitem::count();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }



    public function getstock  (){
        try {
            return Stock::count();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }


    public function getsupplier  (){
        try {
            return Supplier::count();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }


    public function getpayment  (){
        try {
            return Payment::count();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }



    public function getreserve  (){
        try {
            return Reserve::count();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }



    public function gettable  (){
        try {
            return Table::count();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

}

