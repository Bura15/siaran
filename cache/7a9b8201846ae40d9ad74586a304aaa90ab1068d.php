<input type="hidden" id="lokasi_url" value="<?php echo e(($mode == 'create') ? 'transaksi_keluar/create' : 'transaksi_keluar/edit'); ?>">
<input type="hidden" id="mode" value="<?php echo e(($mode == 'create') ? 'create' : 'edit'); ?>">
<?php
    $url_delete_detail = ($mode == 'create') ? 'mode='.$mode : 'mode='.$mode.'&id_barang_keluar='.$_GET['id'];
    $url_simpan_detail = ($mode == 'create') ? 'create' : 'edit?id='.$_GET['id'];
?>
<h3 class="text-primary mb-4">Persediaan Keluar</h3>
<div class="row mb-2">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-block">
                <div class="card-header">
                    <h3>Form Persediaan Keluar</h3>
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
                                <input type="text" id="tgl_barang_keluar" value="<?php echo e(date('m/d/Y', strtotime($r->tgl_barang_keluar ?? date('m/d/Y'))) ?? ''); ?>" class="form-control" readonly>
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
                            <a href="<?php echo e(base_url('transaksi_keluar')); ?>" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped dataTable dtr-column collapsed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Barang</th>
                                        <th>Qty</th>
                                        <th>Stok</th>
                                        <th>Status</th>
                                        <th>Qty Baru</th>
                                        <th>Ket.</th>
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
                                                <td><?php echo e($item->kode_barang); ?> - <?php echo e($item->nama_barang); ?></td>
                                                <td><?php echo e($item->jml_tmp); ?> <?php echo e($item->satuan); ?></td>
                                                <td>
                                                    <?php echo e($item->stok); ?> <?php echo e($item->satuan); ?>

                                                    <input type="hidden" class="stok" value="<?php echo e($item->stok); ?>">
                                                </td>
                                                <td>
                                                    <?php if($item->status_barang_tmp == 0): ?>
                                                        <span class="badge badge-warning">Pending</span>
                                                    <?php elseif($item->status_barang_tmp == 2): ?>
                                                        <span class="badge badge-success">Ok</span>
                                                        
                                                    <?php endif; ?>
                                                </td>
                                                <td><input class="jml_ubah text-center" style="width:50px" type="text" value="<?php echo e(($item->jml_ubah == 0) ? $item->jml_tmp : $item->jml_ubah); ?>"></td>
                                                <td width="20"><input class="keterangan" type="text" value="<?php echo e($item->keterangan_tmp); ?>"></td>
                                                <td>
                                                    <button class="btn-ubah btn btn-small btn-success"
                                                    id_detail="<?php echo e($item->id_tmp); ?>"
                                                    ><i class="fa fa-edit"></i> Verif</button>
                                                    
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
            
            $('.btn-ubah').click(function(){
                let stok =  $(this).closest('tr').find('.stok').val();
                let jml_ubah =  $(this).closest('tr').find('.jml_ubah').val();
                //untuk stok tidak mencukupi
                // if(parseInt(jml_ubah) > parseInt(stok)){
                //     alert('Stok tidak mencukupi!');
                //     return false;
                // }
                let confir = confirm('Yakin akan verifikasi data ini?');
                if (confir === true) {
                    let id_detail = $(this).attr('id_detail');
                    let keterangan =  $(this).closest('tr').find('.keterangan').val();
                    var data = {
                        id_detail : id_detail,
                        jml_ubah : jml_ubah,
                        keterangan : keterangan,
                    }
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(base_url('transaksi_keluar/verif_detail_barang')); ?>",
                        data: data,
                        success: function (msg) { 
                            if(msg == 'sukses'){
                                alert('verifikasi berhasil');
                                window.location.href="<?php echo e(base_url().'transaksi_keluar/'.$url_simpan_detail); ?>";
                            }else{
                                alert('gagal di tambahkan');
                            }
                        }
                    });
                }else{
                    alert('dibatalkan');
                }
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
                var data = {
                    id_barang_keluar : id_barang_keluar,
                    mode:mode
                }
                $.ajax({
                    type: "POST",
                    url: "<?php echo e(base_url('transaksi_keluar/simpan_verif')); ?>",
                    data: data,
                    success: function (msg) { 
                        if(msg == 'sukses'){
                            alert('berhasil disimpan');
                            window.location.href="<?php echo e(base_url('transaksi_keluar')); ?>";
                        }else{
                            alert('gagal di disimpan');
                        }
                    }
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\persediaan-bpom5\application\views/transaksi_keluar/form.blade.php ENDPATH**/ ?>