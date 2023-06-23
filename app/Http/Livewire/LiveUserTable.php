<?php

namespace App\Http\Livewire;

use App\Models\User;
use Exception;
use Livewire\{Component,WithPagination};
 

class LiveUserTable extends Component
{

    use WithPagination;

    public $search = '';
    public $perpage = 5;
    public $campo = null;
    public $order = null;
    public $icon ='-circle';
 
    protected $queryString =[
     'search' => ['except'=> ''],
     'campo' => ['except'=> null],
     'order' => ['except'=> null],
];

    public function render()
    {

        $users=User::where('name', 'like', "%{$this->search}%") 
        ->orWhere('email', 'like', "%{$this->search}%");

        if($this->campo && $this->order){
          $users=$users->orderBy($this->campo, $this->order);
        }
        else{
            $this->campo = null;
            $this->order= null;
        }
        
        $users=$users->paginate($this->perpage);

        return view('livewire.live-user-table',
        ['users' => $users]);
    }

    public function mount(){
        $this -> icon = $this->iconDirection($this->order);
    }

    public function clear(){
        $this->page = 1;
        $this->order = null;
        $this->campo=null;
        $this->icon = '-circle';
        $this -> search='';
        $this -> perpage = 5;
    }
    public function updatingSearch() //search se llama mi variable
    {
       $this -> resetPage();
    }

    public function sortable($campo){
        if($campo !== $this->campo){
            $this->order=null;
        }
        switch ($this->order){

            case null:
                $this -> order='asc';             
            break;

            case 'asc':
                $this -> order='desc';              
            break;

            case 'desc':
                $this -> order=null;             
            break;
        }
        $this -> icon = $this-> iconDirection($this->order);
        $this-> campo = $campo;
    }

    public function iconDirection($sort): string{
        if(!$sort) 
        {
            return '-circle';
        }
        return $sort === 'asc' ? '-arrow-circle-up' : '-arrow-circle-down';
 
   }

   public $showModal ='hidden';

   public function showModal (User $user){
    $this -> emit('showModal',$user);
   }
}
