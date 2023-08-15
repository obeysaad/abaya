<?php

namespace App\Http\Livewire;

use App\Models\Dress;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search ;
    public $order ="name";
    public $dresss;

    public $id;

    public function __construct($id)
{
    $this->id = $id;

}
    public function render()
    {
           $search = '%' . $this->search . '%';

           if($this->order == 1){
            $this->dresss = Dress::all();
           } else if($this->order == 2){
            $this->dresss = Dress::all();
           } else if($this->order == 3){
            $this->dresss = Dress::all();
           }else{
            $this->dresss = Dress::all();

           }

           if($this->id != -1){
            $this->dresss = $this->dresss->filter(function ($item) {
                return $item->category_id  == $this->id;
            })->values();
           }

        return view('livewire.category');
    }
}