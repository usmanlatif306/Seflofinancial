<style>
    @media (min-width: 320px) and (max-width: 480px) {
    .logomobile{
        height:38px !important;
    }
    .menumobile{
        display: inline-flex !important;
        margin-left: 12%;
    }
}
</style>
<header>
  <nav class="navbar">
    <div class="container">
      <div class="navbar-header">
      <a class="navbar-brand " href="https://seflofinancial.com/"><img class="logomobile" src="https://www.seflofinancial.com/wp-content/uploads/2023/01/Seflofinanciallogo2.png" style="height:66px;"></a>
      </div>
      <ul class="nav navbar-nav navbar-right menumobile">
      <li><a href="<?php echo base_url();?>steps/signin"><!--<span class="glyphicon glyphicon-user"></span>--> Sign in</a></li>
      <li><a href="<?php echo base_url();?>steps/signup"><!-- <span class="glyphicon glyphicon-log-in"></span>--> Sign up</a></li>
      </ul>
    </div>
    </nav>
    
</header>