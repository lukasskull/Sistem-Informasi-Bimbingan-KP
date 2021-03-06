 <div id="page-wrapper" class="page-wrapper-cls">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12"> <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-pencil"></i> Edit Mahasiswa</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>adminController/updateMahasiswa" >
                            <?php echo validation_errors();?>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">NPM</label>
                                    <div class="col-lg-5"> 
                                        <input class="form-control" name="npm" placeholder="npm" value="<?php echo $mahasiswa[0]->npm ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Nama</label>
                                    <div class="col-lg-5">
                                        <input class="form-control" type="text" name="nama" placeholder="nama" value="<?php echo $mahasiswa[0]->nama ?>">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-lg-2 control-label">Kelas</label>
                                    <div class="col-lg-5">
                                        <select name="kelas" class="form-control">
                                            <option></option>
                                            <?php if($mahasiswa[0]->kelas=='A'):?>
                                            <option value="A" selected>A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <?php elseif($mahasiswa[0]->kelas=='B'):?>
                                            <option value="A">A</option>
                                            <option value="B" selected>B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <?php elseif($mahasiswa[0]->kelas=='C'):?>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C" selected>C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <?php elseif($mahasiswa[0]->kelas=='D'):?>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D" selected>D</option>
                                            <option value="E">E</option>
                                            <?php else:?>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E" selected>E</option>                    
                                            <?php endif;?>    
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Angkatan</label>
                                    <div class="col-lg-5">
                                        <select name="angkatan" class="form-control" placeholder="angkatan" value="<?php echo $mahasiswa[0]->angkatan?>">
                                                    
                                            <?php
                                                $now=date('Y');
                                                    if($row['$i'] == "$i"){ 
                                                        for ($i=2010; $i <= $now ; $i++){ 
                                                            echo "<option value='$i'>$i</option>";
                                                            } echo "selected";
                                                            }
                                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Jurusan</label>
                                    <div class="col-lg-5">
                                        <select name="jurusan" class="form-control">
                                            <option></option>
                                            <?php if($mahasiswa[0]->jurusan=='A'):?>
                                            <option value="Teknik Informatika" selected>Teknik Informatika</option>
                                            <option value="Teknik Industri">Teknik Industri</option>
                                            <option value="Teknik Sipil">Teknik Sipil</option>
                                            <?php elseif($mahasiswa[0]->jurusan=='A'):?>
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Teknik Industri" selected>Teknik Industri</option>
                                            <option value="Teknik Sipil">Teknik Sipil</option>
                                            <?php else:?>
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Teknik Industri">Teknik Industri</option>
                                            <option value="Teknik Sipil" selected>Teknik Sipil</option>                  
                                            <?php endif;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Password</label>
                                    <div class="col-lg-5">
                                        <input type="text" name="password" class="form-control" placeholder="Password tidak bisa dirubah" readonly>
                                    </div>
                                </div>
                                <div class="form-group" style="float: center; text-align: center;">
                                    <button class="db-btn-round-fill-green"><i class="fa fa-save"></i> Simpan</button>
                                    <a href="<?=base_url('adminController/viewMahasiswa');?>" class="db-btn-round-fill-grey"><i class="fa fa-undo"> Kembali</i></a>
                                </div>
                            </form>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
  