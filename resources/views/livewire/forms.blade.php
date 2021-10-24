<div>
    <form wire:submit.prevent="submit">
        @if(session()->has('success'))
        <div style="color:green">{{session('success')}}</div>
        @endif
        <input type="hidden" wire:model="hiddenid" value="{{$hiddenid}}"> 
        Name:<br><input type="text" wire:Model="name"></br>
        @error('name')
        <span style="color:red">{{$message}}</span>
        @enderror
        <br>
        Email:<br><input type="text" wire:Model="email"></br>
        @error('email')
        <span style="color:red">{{$message}}</span>
        @enderror
        <br>
        Phone:<br><input type="text" wire:Model="phone"></br>
        @error('phone')
        <span style="color:red">{{$message}}</span>
        @enderror
        <br>
        <button type="submit">Save</button>

    </form>
    <H1>List:</H1><a href="javascript:void(0)" wire:click="addform()">Add</a>
    <table>
        <tr>
            <th>Seq No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Edit</th>
        </tr>    
        @php
        $i=1;
        @endphp
        @foreach($allData as $ad)
        <tr>
            <td>{{$i}}</td>
            <td>{{$ad->name}}</td>
            <td>{{$ad->email}}</td>
            <td>{{$ad->phone}}</td>            
            <td>
                <a href="javascript:void(0)" wire:click="editform({{$ad->id}})">Edit</a>
            </td>
        </tr>
        @php
        $i++;
        @endphp
        @endforeach
    </table>
    {{$allData->links()}}
</div>
