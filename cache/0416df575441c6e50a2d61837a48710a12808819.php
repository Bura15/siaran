<input type="hidden" id="lokasi_url" value="<?php echo e(($mode == 'create') ? 'barang_keluar/create' : 'barang_keluar/edit'); ?>">
<input type="hidden" id="mode" value="<?php echo e(($mode == 'create') ? 'create' : 'edit'); ?>">
<?php
    $url_delete_detail = ($mode == 'create') ? 'mode='.$mode : 'mode='.$mode.'&id_barang_keluar='.$_GET['id'];
    $url_simpan_detail = ($mode == 'create') ? 'create' : 'edit?id='.$_GET['id'];
?>
<h3 class="text-primary mb-4">Permintaan Barang</h3>
<div class="row mb-2">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-block">
                <div class="card-header">
                    <h3>Form Permintaan Barang</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if(isset($_SESSION['success']) == 'success'): ?>
                                <div class="alert alert-success" role="alert">Data berhasil di<?php echo e($_SESSION['success']); ?></div>
                                <hr>
                            <?php elseif(isset($_SESSION['error']) == 'error'): ?>
                                <div class="alert alert-danger" role="alert">Data gagal di<?php echo e($_SESSION['error']); ?></div>
                                <hr>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kode_barang">Kode Barang</label>
                                <select name="kode_barang" id="kode_barang" class="form-control">
                                    <option value="">Pilih Barang</option>
                                    <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option satuan="<?php echo e($item->satuan); ?>" stok="<?php echo e($item->stok); ?>" nama="<?php echo e($item->nama_barang); ?>" value="<?php echo e($item->id_barang); ?>"><?php echo e($item->kode_barang); ?> - <?php echo e($item->nama_barang); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 d-none">
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <input type="text" name="nama_barang" id="nama_barang" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-3 d-none">
                            <div class="form-group">
                                <label for="satuan">Satuan</label>
                                <input type="text" name="satuan" id="satuan" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="text" name="stok" id="stok" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="jml">Jumlah</label>
                                <input type="text" name="jml" id="jml" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="stok"><br></label><br>
                                <button id="btnTambahBarang" class="btn btn-primary">Tambah Barang</button>
                            </div>
                        </div>
                        <div class="col-12"><hr></div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tgl_barang_keluar">Unit</label>
                                <input readonly type="text" class="form-control" value="<?php echo e(getSession('bagian')); ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="tgl_barang_keluar">Tanggal Transaksi</label>
                                <input type="hidden" id="id_barang_keluar" value="<?php echo e($r->id_barang_keluar ?? ''); ?>">
                                <input type="text" id="tgl_barang_keluar" value="<?php echo e(date('m/d/Y', strtotime($r->tgl_barang_keluar ?? date('m/d/Y'))) ?? ''); ?>" class="datepicker form-control">
                            </div>
                            <div class="form-group d-none">
                                <label for="id_pegawai">Pegawai</label>
                                <select name="id_pegawai" id="id_pegawai" class="form-control">
                                    <option value="<?php echo e(getSession('id_pegawai')); ?>">Pilih Pegawai</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button id="btnSimpanTransaksi" class="btn btn-success">Simpan Transaksi</button>
                            <a href="<?php echo e(base_url('barang_keluar')); ?>" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped dataTable dtr-column collapsed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Qty</th>
                                        <th>Satuan</th>
                                        
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no =1;
                                    ?>
                                    <?php $__currentLoopData = $tmp_barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($no); ?></td>
                                                <td><?php echo e($item->kode_barang); ?></td>
                                                <td><?php echo e($item->nama_barang); ?></td>
                                                <td><?php echo e($item->jml_tmp); ?></td>
                                                <td><?php echo e($item->satuan); ?></td>
                                                
                                                <td>
                                                    <a href="<?php echo e(base_url('barang_keluar/delete_tmp?id=').$item->id_tmp.'&'.$url_delete_detail); ?>" class="btn-delete btn btn-small btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                                </td>
                                            </tr>
                                        <?php
                                            $no ++;
                                        ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row">
    
</div>

<hr>
<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            $('#kode_barang').select2();
            $("#kode_barang").change(function() {
                var nama_barang = $(this).children("option:selected").attr('nama');
                var stok = $(this).children("option:selected").attr('stok');
                var satuan = $(this).children("option:selected").attr('satuan');
                $('#nama_barang').val(nama_barang);
                $('#stok').val(stok);
                $('#satuan').val(satuan);
            });

            $("#btnTambahBarang").click(function() {
                var mode = $('#mode').val();
                var id_barang_keluar = $('#id_barang_keluar').val();
                var nama_barang = $('#nama_barang').val();
                var jml = $('#jml').val();
                var id_barang = $('#kode_barang').val();
                if(nama_barang == '' || jml == ''){
                    alert('data tidak boleh kosong!')
                }else{
                    var data = {
                        id_barang_keluar : id_barang_keluar,
                        
                        id_barang : id_barang,
                        jml : jml,
                        mode:mode
                    }
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(base_url('barang_keluar/simpan_tmp')); ?>",
                        data: data,
                        success: function (msg) { 
                            if(msg == 'sukses'){
                                alert('berhasil ditambahkan');
                                window.location.href="<?php echo e(base_url().'barang_keluar/'.$url_simpan_detail); ?>";
                            }else{
                                alert('gagal di tambahkan');
                            }
                        }
                    });
                }
            });

            $("#btnSimpanTransaksi").click(function() {
                var mode = $('#mode').val();

                var id_barang_keluar = $('#id_barang_keluar').val();
                var tgl_barang_keluar = $('#tgl_barang_keluar').val();
                var id_pegawai = $('#id_pegawai').val();
                if(tgl_barang_keluar == ''){
                    alert('data tidak boleh kosong!')
                }else{
                    var data = {
                        id_barang_keluar : id_barang_keluar,
                        tgl_barang_keluar : tgl_barang_keluar,
                        id_pegawai : id_pegawai,
                        mode:mode
                    }
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(base_url('barang_keluar/simpan')); ?>",
                        data: data,
                        success: function (msg) { 
                            if(msg == 'sukses'){
                                alert('berhasil disimpan');
                                window.location.href="<?php echo e(base_url('barang_keluar')); ?>";
                            }else{
                                alert('gagal di disimpan');
                            }
                        }
                    });
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\persediaan-bpom5\application\views/barang_keluar/form.blade.php ENDPATH**/ ?>