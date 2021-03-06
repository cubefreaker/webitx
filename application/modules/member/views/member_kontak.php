<div class="tab-pane active" id="kontak" style="margin-top: 60px;">
    <form id="kontakfrm" class="form-horizontal" method="post" action="<?=base_url('member/editKontak')?>">
        <div class="panel panel-primary shad">
            <div class="panel-heading">
                <div class="panel-title">
                    <center>Kontak Perwakilan Perusahaan</center>
                </div>
            </div>
        
            <div class="panel-body" > 
                <div class="col-md-12">    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Kontak Umum</th>
                                <th>Kontak Operasional</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-group" style="margin-right:5%;">
                                        <label class="control-label col-sm-2" style="text-align: left;">Nama</label> 
                                        <div class="input-group col-sm-10">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </span>
                                            <input type="text" class="form-control" name="name" value="<?=$contact ? $contact->name:'';?>" required>
                                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" style="text-align: left;">Nama</label> 
                                        <div class="input-group col-sm-10">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </span>
                                            <input type="text" class="form-control" name="nameops" value="<?=$contact ? $contact->name_ops:'';?>" required>
                                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group" style="margin-right:5%;">
                                        <label class="control-label col-sm-2" style="text-align: left;">Email</label> 
                                        <div class="input-group col-sm-10">
                                            <span class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                            <input type="email" class="form-control" name="email" value="<?=$contact ? $contact->email:'';?>" required>
                                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" style="text-align: left;">Email</label> 
                                        <div class="input-group col-sm-10">
                                            <span class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                            <input type="email" class="form-control" name="emailops" value="<?=$contact ? $contact->email_ops:'';?>" required>
                                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group" style="margin-right:5%;">
                                        <label class="control-label col-sm-2" style="text-align: left;">No. Tlp</label> 
                                        <div class="input-group col-sm-10">
                                            <span class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                            <input type="tel" class="form-control" onkeypress="return isNumberKey(event)" name="phone" value="<?=$contact ? $contact->phone:'';?>" required>
                                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" style="text-align: left;">No. Tlp</label> 
                                        <div class="input-group col-sm-10">
                                            <span class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                            <input type="tel" class="form-control" onkeypress="return isNumberKey(event)" name="phoneops" value="<?=$contact ? $contact->phone_ops:'';?>" required>
                                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group" style="margin-right:5%;">
                                        <label class="control-label col-sm-2" style="text-align: left;">No. HP</label> 
                                        <div class="input-group col-sm-10">
                                            <span class="input-group-addon">
                                                <i class="fa fa-mobile"></i>
                                            </span>
                                            <input type="tel" class="form-control" onkeypress="return isNumberKey(event)" name="mobile" value="<?=$contact ? $contact->mobile:'';?>" required>
                                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" style="text-align: left;">No. HP</label> 
                                        <div class="input-group col-sm-10">
                                            <span class="input-group-addon">
                                                <i class="fa fa-mobile"></i>
                                            </span>
                                            <input type="tel" class="form-control" onkeypress="return isNumberKey(event)" name="mobileops" value="<?=$contact ? $contact->mobile_ops:'';?>" required>
                                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button id="savekontak" type="submit" class="btn btn-md btn-info pull-right">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>