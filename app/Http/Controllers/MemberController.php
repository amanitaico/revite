<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Validation\Rule;
use Illuminate\Pagination\Paginator;

class MemberController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members=Member::paginate(8);
        return view('member.list',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs=$request->validate([
        'name'=>'required|max:30',
        'kana'=>'required|max:30',
        'email'=>'required||string|unique:members,email',
        'password'=>'required|string|min:8',
        'tel'=>'required',
        'zip'=>'required',
	    'prefecture'=>'required',
        'address'=>'required',
        'address2'=>'required',
        'memo'=>'nullable|max:255',
        ]);

        $member=new Member();
        $member->name=$request->name;
        $member->kana=$request->kana;
        $member->email=$request->email;
        $member->password=$request->password;
        $member->tel=$request->tel;
        $member->zip=$request->zip;
        $member->prefecture=$request->prefecture;
        $member->address=$request->address;
        $member->address2=$request->address2;
        $member->memo=$request->memo;
        
        $member->save();
        return redirect()->route('member.create')->with('message','会員情報を登録したっす！');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show(Member $member)
   // {
       //return view('member.list', compact('member'));
   // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('member.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $inputs=$request->validate([
        'name'=>'required|max:30',
        'kana'=>'required|max:30',
        'email'=>['required','email', Rule::unique('members')->ignore($member->id)],
        'password'=>'required|string|min:8',
        'tel'=>'required',
        'zip'=>'required',
	    'prefecture'=>'required',
        'address'=>'required',
        'address2'=>'required',
        'memo'=>'nullable|max:255'
        ]);

        $member->name=$inputs['name'];
        $member->kana=$inputs['kana'];
        $member->email=$inputs['email'];
        $member->password=$inputs['password'];
        $member->tel=$inputs['tel'];
        $member->zip=$inputs['zip'];
        $member->prefecture=$inputs['prefecture'];
        $member->address=$inputs['address'];
        $member->address2=$inputs['address2'];
        $member->memo=$inputs['memo'];

        $member->save();

        return redirect()->route('member.index')->with('message', '会員情報の更新やりよりました！');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
