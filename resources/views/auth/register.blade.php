<doctype html!>
  
@if ($errors->any())
  <ul>
    {!! implode('',$errors->all('<li>:message</li>'))!!}
</ul>

@endif


<div id="reg">
  <h4>Register and start Learning</h4>
<form method="POST" action="/store">
  <div>
    <label for="">Name</label><br> <input type="text" name="name">
  </div><br>  
  <div>
    <label for="">Email</label><br> <input type="text" name="email">
</div><br>
<div>  
    <label for="">Password</label><br> <input type="password" name="password">
</div><br> 
 <div>  
    <label for="">Confirm Password</label><br> <input type="password" name="password_confirmation">
</div><br> 
  <div>  
    <input type="submit" value="Register" class="sub">
</div><br> 
  @csrf
</form>
      </div>

      <style>
        #reg{
          max-width:250px;
         margin: 80px auto 728px;
         padding: calc(24px - 1px);
         background: #fff;
         border-radius: 6px;
         border: 1px solid #ddd;

        }
       .sub{
        font-size:medium;
        color:white;
        background:blue;
        border:1px;


       }



</style>


</html>