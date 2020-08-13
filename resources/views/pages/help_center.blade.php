@extends('layout.user_layout')
@section('user_content')

    <link href="{{asset('backend/css/style.css')}}" rel='stylesheet' type='text/css' />
    <style>
        body{
            background: white;
        }

    </style>
<div class="reg-w3">
    <div class="w3layouts-main">
        <h2>FIND HELP</h2>
        <input type="text" class="ggg" name="firstname" placeholder="FIRSTNAME" required="">
        <input type="text" class="ggg" name="lastname" placeholder="LASTNAME" required="">
        <input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
        <input type="text" class="ggg" name="phone" placeholder="PHONE" required="">
        <label class="ggg" for="input_6"> Best way to contact me : </label>
        <div style="margin-bottom: 60px">
            <select style="width:250px" data-component="dropdown" aria-labelledby="label_6">
                <option value="">  </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4+"> 4+ </option>
            </select>
        </div>

        <label class="ggg"> What do you need help with ? </label>
        <h4 style="color: #000000"><input type="checkbox" /> Children </h4>
        <h4 style="color: #000000"><input type="checkbox" /> Diasbilities </h4>
        <h4 style="color: #000000"><input type="checkbox" /> Disadvantaged </h4>
        <h4 style="color: #000000"><input type="checkbox" /> Other difficulities </h4>

        <label class="ggg" style="margin-top: 20px"> I am in need of: </label>
        <div id="cid_31" class="form-input-wide">
            <textarea id="input_31" class="form-textarea" name="q31_iAm31" rows="4" cols="30" data-component="textarea" aria-labelledby="label_31"></textarea>
        </div>

        <label class="ggg" style="margin-top: 20px"> COMENTS </label>
        <div id="cid_31" class="form-input-wide">
            <textarea id="input_31" class="form-textarea" name="q31_iAm31" rows="4" cols="30" data-component="textarea" aria-labelledby="label_31"></textarea>
        </div>

        <div class="clearfix"></div>
        <input type="submit" value="Submit" name="submit" data-target="#exampleModal">

    </div>
</div>

@endsection
