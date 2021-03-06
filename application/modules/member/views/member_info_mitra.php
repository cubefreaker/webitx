<div class="tab-pane active" id="infomitra" style="margin-top: 60px;">
    <?= form_open_multipart('member/editMitra',array('class' => 'form-horizontal','id' => 'mitrafrm')) ?>
        <div class="panel panel-primary shad">
            <div class="panel-heading">
                <div class="panel-title">
                    <center>Informasi Mitra</center>
                </div>
            </div>
        
            <div class="panel-body" > 
                <div class="col-md-6" style="padding:2%;">
                    <div class="form-group">
                        <label class="control-label col-sm-4" style="text-align: left;">Nama Brand / Merk</label> 
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon">
                                <i class="fa fa-qrcode"></i>
                            </span>
                            <input type="text" class="form-control" id="brand" name="brand" value="<?=$mitra ? $mitra->brand:'';?>" required>
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" style="text-align: left;">Nama Perusahaan</label> 
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon">
                                <i class="fa fa-building"></i>
                            </span>
                            <input type="text" class="form-control" name="coname" value="<?=$mitra ? $mitra->mitra_name:'';?>" required>
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-4" style="text-align: left;">Nama Pemilik Usaha</label> 
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input type="text" class="form-control" name="owner" value="<?=$mitra ? $mitra->owner:'';?>" required>
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" style="text-align: left;">No Telepon</label> 
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </span>
                            <input type="tel" class="form-control" onkeypress="return isNumberKey(event)" name="phone" value="<?=$mitra ? $mitra->phone_no:'';?>" required>
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" style="text-align: left;">No HP</label> 
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon">
                                <i class="fa fa-mobile"></i>
                            </span>
                            <input type="tel" class="form-control" onkeypress="return isNumberKey(event)" name="mobile" value="<?=$mitra ? $mitra->mobile_no:'';?>" required>
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" style="text-align: left;">Provinsi</label> 
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon">
                                <i class="fa fa-home"></i>
                            </span>
                            <select class="form-control select2" name="province" id="id_province" style="width: 100%">
                                <?php
                                    if($mitra->province != '') {
                                        echo '<option selected value="'.$mitra->province.'">'.$mitra->province.'';
                                        foreach($is_exist_province as $p){
                                            echo '<option data-id="'.$p->id.'" value="'.$p->name.'" >'.$p->name.'</option>';
                                        }
                                    } else {

                                        foreach($Provinces as $p){
                                            echo '<option data-id="'.$p->id.'" value="'.$p->name.'" >'.$p->name.'</option>';
                                        }
                                    }
                                ?>
                            </select>
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" style="text-align: left;">Kabupaten / Kota</label> 
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon">
                                <i class="fa fa-home"></i>
                            </span>
                            <select class="form-control" name="city" id="city">
                            <?php
                                    if($mitra->city != NULL && $mitra->city != ''){
                                        echo '<option selected value="'.$mitra->city.'">'.$mitra->city.'</option>';
                                        foreach($is_exist_city as $p){
                                            echo '<option data-id="'.$p->id.'" value="'.$p->name.'" >'.$p->name.'</option>';
                                        }

                                    }else{
                                        echo '<option value="">-- Pilih Kota --</option>';
                                        foreach($Cities as $p){
                                            echo '<option data-id="'.$p->id.'" value="'.$p->name.'" >'.$p->name.'</option>';
                                        }
                                    }
                                    ?>
                            </select>
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" style="text-align: left;">Kecamatan</label> 
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon">
                                <i class="fa fa-home"></i>
                            </span>
                            <select class="form-control" name="subdistrict" id="kecamatan">
                            <?php
                                if($mitra->sub_district != NULL && $mitra->sub_district != ''){
                                    echo '<option value="'.$mitra->sub_district.'" disabled selected hidden>'.$mitra->sub_district.'</option>';
                                    foreach($is_exist_districts as $p){
                                            echo '<option data-id="'.$p->id.'" value="'.$p->name.'" >'.$p->name.'</option>';
                                        }

                                }else{
                                    echo '<option value="">-- Pilih Kecamatan --</option>';
                                    foreach($Districts as $p){
                                        echo '<option data-id="'.$p->id.'" value="'.$p->name.'" >'.$p->name.'</option>';
                                    }
                                }

                            ?>
                            </select>
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" style="text-align: left;">Alamat Perusahaan</label> 
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon">
                                <i class="fa fa-home"></i>
                            </span>
                            <textarea  class="form-control" name="address"><?=$mitra ? $mitra->address:'';?></textarea> 
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                        </div>
                    </div>
                </div>
                

                <div class="col-md-6 text-center"style="padding:2%;">
                    <div class="img-thumbnail text-center" style="margin-bottom:35px;">
                        <?php 
                            $query = $this->db->query("SELECT * FROM users_mitra WHERE user_id = '".$Member->id."'");
                            $company = $query->row();
                            
                            $csrf_name = $this->security->get_csrf_token_name();
                            $csrf_hash = $this->security->get_csrf_hash();

                            if($company != NULL){
                                if ($company->logo == NULL || $company->logo == '') {
                                    echo '
                                        <input type="file" id="imgUpload" name="logoURL" style="display: none;">
                                        <input type="hidden" name="'.$csrf_name.'" value="'.$csrf_hash.'">
                                        <input type="image" id="imgBrand" height="200" width="200" src="'.base_url().'assets/images/profile/profile.png">';
                                } else {
                                    echo '
                                        <input type="file" id="imgUpload" name="logoURL" style="display: none;">
                                        <input type="hidden" name="'.$csrf_name.'" value="'.$csrf_hash.'">
                                        <input type="image" id="imgBrand" height="200" width="200" src="'.base_url().'assets/images/logo/'.$mitra->logo.'">';
                                }
                            }else{
                                echo '
                                    <input type="file" id="imgUpload" name="logoURL" style="display: none;>
                                    <input type="hidden" name="'.$csrf_name.'" value="'.$csrf_hash.'">
                                    <input type="image" id="imgBrand" height="200" width="200" src="'.base_url().'assets/images/profile/profile.png">';
                            }
                        ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" style="text-align: left;">Email</label> 
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="email" class="form-control" name="email" value="<?=$mitra ? $mitra->email:'';?>" required>
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" style="text-align: left;">Website</label> 
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon">
                                <i class="fa fa-globe"></i>
                            </span>
                            <input type="text" class="form-control" name="website" value="<?=$mitra ? $mitra->website:'';?>" required>
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-4" style="text-align: left;">Kode Pos</label> 
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope-o"></i>
                            </span>
                            <input type="text" class="form-control" onkeypress="return isNumberKey(event)" name="postal" value="<?=$mitra ? $mitra->postal_code:'';?>" required>
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                        </div>
                    </div>
                </div>

                <button id="savemitra" type="submit" class="btn btn-info pull-right">Save Changes</button>
            </div>
        </div>
    <?= form_close(); ?>
</div>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#imgBrand').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgUpload").change(function(){
        readURL(this);
    });

    $(document).ready(function(){
    	$('#savemitra').click(function(){
            if(confirm("Are You Sure?")){
                $("#mitrafrm").submit();
            }
    	});

        $("#imgBrand").click(function(e) {
            e.preventDefault();
            $("#imgUpload").click();
        });
    });

    $('#id_province').change(function () {
        var id_province = $(this).find(':selected').attr('data-id')
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>member/get_city',
            data: {
                'id': id_province

            },
            success: function (data) {
                // console.log(data);
                data = JSON.parse(data);
                var $city = $('#city');
                $city.empty();
                $city.append('<option>-- Pilih kota --</option>');
                for (var i = 0; i < data.length; i++) {
                    // console.log(data[i].name);
                    $city.append('<option data-id = '+data[i].id+' value="' + data[i].name + '">' + data[i].name + '</option>');
                }
                $city.change();
            }
        });
    });

    $('#city').change(function () {
        var id_city = $(this).find(':selected').attr('data-id')
        // console.log(id_city)
        // var id_province = $('#id_province').val();
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>member/get_district',
            data: {
                'id': id_city

            },
            success: function (data) {
                // console.log(data);
                data = JSON.parse(data);
                var $kecamatan = $('#kecamatan');
                $kecamatan.empty();
                $kecamatan.append('<option>-- Pilih Kecamatan --</option>');
                for (var i = 0; i < data.length; i++) {
                    // console.log(data[i].name);
                    $kecamatan.append('<option value="' + data[i].name + '">' + data[i].name + '</option>');
                }
                $kecamatan.change();
            }
        });
    });

    $('.select2').select2();
</script>


<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
  $http.get('http://localhost/webitx/member/tes')
  .then(function(response) {
    $scope.country = response.data;
  });console.log('tes');
});
</script> 