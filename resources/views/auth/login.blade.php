@if ($errors->any())
  <ul>
    {!! implode('',$errors->all('<li>:message</li>'))!!}
</ul>
@endif

<div id="lit">
<h4>Login to your Account</h4><br>

<form method="POST" action="/authenticate">
 <div>
    <label for="">Email </label><br><input  type="text" name="email"> 
</div><br>
<div>   
 <label for="">Password </label><br><input  type="password" name="password"> 
</div><br>
<div id="fit"> 
 <input type="submit"  value="Login" class="button">
 </div> <br>
@csrf 
</form>                
</div>

<style>            

     #lit{
         max-width:360px;
         margin: 48px auto 128px;
         padding: calc(24px - 1px);
         background: #fff;
         border-radius: 6px;
         border: 1px solid #ddd;

     }
       .button{
        font-size:medium;
        color:white;
        background:blue;
        border:1px;
       }
 </style>