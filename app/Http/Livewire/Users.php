<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $name,$email,$emp,$emp_id;
    public $updatemode = false;
    public function render()
    {
        $this->emp = Employee::all();
        return view('livewire.users');
    }

    public function resetfield(){
        $this->name='';
        $this->email='';
    }

    public function store()
    {
        $validateDta = $this->validate([

            'name' =>'required',
            'email' =>'required|email',
        ]);

        Employee::create($validateDta);
        session()->flash('message','User Updated successfully.');
        $this->resetfield();

        $this->emit('userStore');
    }


    public function edit($id)
    {
      $this->updatemode = true;
      $emp = Employee::where('id',$id)->first();
      $this->emp_id= $emp->id;
      $this->name= $emp->name;
      $this->email= $emp->email;
    }
    public function cancel(){
        $this->updatemode = false;
        $this->resetfield();
    }


    public function update()
    {
      $this->validate([
        'name' => 'required',
        'email' => 'required | email',
      ]);
      if($this->emp_id){
       $emp = Employee::find($this->emp_id);
       $emp->update([
        'name' =>$this->name,
        'email' =>$this->email,
       ]);
       $this->updatemode = false;
       $this->resetfield();
       $this->emit('userStore');

      }
    }

    public function delete($id){
        if($id){
            Employee::where('id',$id)->delete();
        }
    }


    
}
