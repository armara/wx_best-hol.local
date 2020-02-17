<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12 card">
    <form method="get">
     <div class="form-group ">
      <label class="control-label requiredField" for="name">
       Full Name
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="name" name="name" placeholder="Andy Brown" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="email">
       Email
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="email" name="email" placeholder="andy@mail.com" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="tel">
       Phone Number
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="tel" name="tel" placeholder="+374-11-22-33-44" type="text"/>
     </div>
     <div class="form-group" id="div_messengerbox">
      <label class="control-label " for="messengerbox">
       Specify the messenger that supports your phone
      </label>
      <div class=" ">
       <label class="checkbox-inline">
        <input name="messengerbox" type="checkbox" value="Viber"/>
        Viber
       </label>
       <label class="checkbox-inline">
        <input name="messengerbox" type="checkbox" value="WhatsApp"/>
        WhatsApp
       </label>
       <label class="checkbox-inline">
        <input name="messengerbox" type="checkbox" value="Telegram"/>
        Telegram
       </label>
      </div>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>
