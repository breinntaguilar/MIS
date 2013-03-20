<div class="container">

<!-- Masthead
================================================== -->
<header class="jumbotron subhead" id="overview">
<!--<header id="header">-->
    <div class="row">
        <div class="span10">
            <!-- <h1>{TGO}</h1>
            <p class="lead">TGO HRIS</p> -->
        </div>
    </div>
<?php if ($this->session->userdata('user_id')) : ?>
    <div class="subnav">
        <ul class="nav nav-pills">
            <li class="active"><a href="#typography">Typography</a></li>
            <li><a href="#navbar">Navbar</a></li>
            <li class=""><a href="#buttons">Buttons</a></li>
            <li class=""><a href="#forms">Forms</a></li>
            <li><a href="#tables">Tables</a></li>
            <li class=""><a href="#miscellaneous">Miscellaneous</a></li>
        </ul>
    </div>
<?php endif; ?>
</header>