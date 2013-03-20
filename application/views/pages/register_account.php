<div class="row">
        <div class="span8 offset2">
        
            <?php if ( isset($flash) ): ?>
            <div class="alert alert-success"><a class="close" data-dismiss="alert">x</a><strong><?php echo $flash; ?></strong></div>
            <?php endif; ?>

            <?php 
                $attributes = array('class' => 'form-horizontal well', 'id' => 'myform');
                echo form_open('user/registeraccount', $attributes);
            ?>
            <div class="page-header">
                <!-- <h1>{MIS} : Register</h1> -->
                <h1>Register Account</h1>
            </div>
                <?php echo form_error('username'); ?>
                <?php echo form_error('email'); ?>
                <?php echo form_error('fname'); ?>
                <?php echo form_error('lname'); ?>
                <?php echo form_error('password'); ?>
                <?php echo form_error('password_confirm'); ?>

            <fieldset>
                <div id="legend">
                    <legend class="">Personal Information</legend>
                </div>

                <div class="control-group">
                <!-- Username -->
                <label class="control-label" for="fname">First Name</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'fname',
                                'id' => 'fname',
                                'value' => set_value('fname')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>

                 
                <div class="control-group">
                <!-- E-mail -->
                <label class="control-label" for="mname">Middle Name</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'mname',
                                'id' => 'mname',
                                'value' => set_value('mname')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>

                <div class="control-group">
                <!-- First Name -->
                <label class="control-label" for="lname">Last Name</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'lname',
                                'id' => 'lname',
                                'value' => set_value('lname')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>

                <div class="control-group">
                <!-- Last Name -->
                <label class="control-label" for="alias">Nickname</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-xlarge',
                                'name' => 'alias',
                                'id' => 'alias',
                                'value' => set_value('alias')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>

                <!-- Birth Date -->
                <div class="control-group">
                <label class="control-label" for="birthdate">Birth Date</label>
                    <div class="controls">
                    <?php
                        $options = array(
                            '7'  => '7',
                            '10'    => '10'
                        );
                        echo form_dropdown('day', $options,'','class="input-mini" id="day"');
                    ?>
                    <?php
                        $options = array(
                            'Jan'  => 'January',
                            'Nov'    => 'November'
                        );
                        echo form_dropdown('month', $options,'','class="input-small" id="month"');
                    ?>
                    <?php
                        $options = array(
                            '1986'  => '1986',
                            '1987'    => '1987'
                        );
                        echo form_dropdown('year', $options,'','class="input-small" id="year"');
                    ?>
                    </div>
                </div>
                 
                <div class="control-group">
                <label class="control-label" for="bplace">Birth Place</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'bplace',
                                'id' => 'bplace',
                                'value' => set_value('bplace')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="gender">Gender</label>
                    <div class="controls">
                    <div id="tab" class="btn-group" data-toggle="buttons-radio">
                        <a href="#male" class="btn active" data-toggle="tab">Male</a>
                        <a href="#female" class="btn" data-toggle="tab">Female</a>
                    </div>
                    </div>
                </div>

                <div class="control-group">
                <label class="control-label" for="civilstatus">Civil Status</label>
                    <div class="controls">
                    <?php
                        $options = array(
                            'single'  => 'Single',
                            'married'    => 'Married',
                            'widow' => 'Widow',
                            'separated' => 'Separated'
                        );
                        echo form_dropdown('civilstatus', $options,'','class="input-medium" id="civilstatus"');
                    ?>
                    </div>
                </div>

                <div class="control-group">
                <label class="control-label" for="cell_num">Cellphone Number</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'cell_num',
                                'id' => 'cell_num',
                                'value' => set_value('cell_num')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>

                <div class="control-group">
                <label class="control-label" for="email_add">Email Address</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'email_add',
                                'id' => 'email_add',
                                'value' => set_value('email_add')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>

                <div class="control-group">
                <label class="control-label" for="home_add">Home Address</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'home_add',
                                'id' => 'home_add',
                                'value' => set_value('home_add')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>

                <div class="control-group">
                <label class="control-label" for="siblings">Number of Siblings</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'siblings',
                                'id' => 'siblings',
                                'value' => set_value('siblings')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>

                <div class="control-group">
                <label class="control-label" for="birth_order">Your Birth Order</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'birth_order',
                                'id' => 'birth_order',
                                'value' => set_value('birth_order')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>

                <div id="legend">
                    <legend class="">Contact Person</legend>
                </div>

                <!-- Contact Person -->
                <div class="control-group">
                <label class="control-label" for="contact_name">Contact Person Name</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'contact_name',
                                'id' => 'contact_name',
                                'value' => set_value('contact_name')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>

                <div class="control-group">
                <label class="control-label" for="contact_add">Contact Person Address</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'contact_add',
                                'id' => 'contact_add',
                                'value' => set_value('contact_add')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>
                 
                <div class="control-group">
                <label class="control-label" for="contact_num">Cellphone Number</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'contact_num',
                                'id' => 'contact_num',
                                'value' => set_value('contact_num')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>

                <div id="legend">
                    <legend class="">School</legend>
                </div>

                <!-- School -->
                <div class="control-group">
                <label class="control-label" for="sch_name">School Name</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'sch_name',
                                'id' => 'sch_name',
                                'value' => set_value('sch_name')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>

                <div class="control-group">
                <label class="control-label" for="sch_add">School Address</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'sch_add',
                                'id' => 'sch_add',
                                'value' => set_value('sch_add')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>

                <div class="control-group">
                <label class="control-label" for="yr_level">Course &amp; Year Level</label>
                    <div class="controls">
                    <?php
                        $options = array(
                            '' => '--',
                            '1'  => '1st Year',
                            '2'    => '2nd Year',
                            '3' => '3rd Year',
                            '4' => '4th Year'
                        );
                        echo form_dropdown('yr_level', $options,'','class="input-mini" id="yr_level"');
                    ?>
                    <?php
                        $data = array( 
                                'class' => 'input-medium',
                                'name' => 'course',
                                'id' => 'course',
                                'value' => set_value('course')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>


                <!-- Profession -->
                <div id="legend">
                    <legend class="">Professional</legend>
                </div>

                <div class="control-group">
                <label class="control-label" for="occupation">Occupation</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'occupation',
                                'id' => 'occupation',
                                'value' => set_value('occupation')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>
                
                <div class="control-group">
                <label class="control-label" for="comp_name">Company Name</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'comp_name',
                                'id' => 'comp_name',
                                'value' => set_value('comp_name')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>

                <div class="control-group">
                <label class="control-label" for="comp_add">Company Address</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'comp_add',
                                'id' => 'comp_add',
                                'value' => set_value('comp_add')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>

                <div class="control-group">
                <label class="control-label" for="com_num">Contact Number</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'com_num',
                                'id' => 'com_num',
                                'value' => set_value('com_num')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>

                <!-- Profession -->
                <div id="legend">
                    <legend class="">User Account</legend>
                </div>

                <div class="control-group">
                <label class="control-label" for="username">Username</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'username',
                                'id' => 'username',
                                'value' => set_value('username')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>
                
                <div class="control-group">
                <label class="control-label" for="password">Password</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'password',
                                'id' => 'password',
                                'value' => set_value('password')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>

                <div class="control-group">
                <label class="control-label" for="conf_pass">Confirm Password</label>
                    <div class="controls">
                    <?php
                        $data = array( 
                                'class' => 'input-large',
                                'name' => 'conf_pass',
                                'id' => 'conf_pass',
                                'value' => set_value('conf_pass')
                                );
                        echo form_input($data);
                    ?>
                    </div>
                </div>

                <br>
                <br>
                <!-- Button Start Here--> 
                <div class="control-group">
                <p class="offset1">   
                    <?php
                    echo form_button(array(
                        'id' => 'register', 
                        'value' => 'Register', 
                        'name' => 'register', 
                        'type' => 'submit', 
                        'content' => 'Register Account',
                        'class' => 'btn btn-success btn-large'
                        ));
                    ?>
                    <?php if ($this->session->userdata('user_id')) : ?>
                    <a class="btn btn-large" href="<?php echo site_url('album/home'); ?>">Cancel</a>
                    <?php else : ?>
                    <a class="btn btn-large" href="<?php echo site_url('auth/index'); ?>">Cancel</a>
                    <?php endif ?>
                </p>
                </div>
                <!-- Button End Here--> 

            </fieldset>
        <?php echo form_close(); ?>

    </div>
</div>
