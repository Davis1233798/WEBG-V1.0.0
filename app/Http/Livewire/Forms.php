<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\register;
use Livewire\WithPagination;
use DB;

class Forms extends Component
{
    use WithPagination;
    public $name;
    public $email;
    public $phone;
    public $hiddenid;
    public $updateid;
    
  //  public $allData = [];
    protected $rules = [
    'name'=>'required|min:3|max:20',
    'email' => 'required|email',
    'phone' => 'required|min:3|max:20'
    ];

    public function submit()
    {
     $validateData = $this->validate();
     $updateid = $this->hiddenid;
     if($updateid>0) {
        //update
        $updateArray=array(
        'name'=>$validateData['name'],
        'email'=>$validateData['email'],
        'phone'=>$validateData['phone']
        );
        DB::table('registers')->where('id',$updateid)->update($updateArray);
     }
     else{
        Register::create($validateData);
     }
     
     session()->flash('success','Form is submitted');
    }
    public function addform(){
    
        $this->name='';
        $this->email='';
        $this->phone='';
      
    }
    public function editform($id){
        $singleData = register::find($id);
        $this->name=$singleData->name;
        $this->email=$singleData->email;
        $this->phone=$singleData->phone;
        $this->hiddenid=$singleData->id;
    }

    public function render()
    {
        $allData = register::paginate(5);
        return view('livewire.forms', ['allData'=>$allData]);
    }
}
