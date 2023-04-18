            <section class="bg-gray-200 p-5">

                <a href="?page=" class="bg-gray-300 hover:bg-gray-400 transition px-3 py-2">Kembali</a>

            </section>
            
            <div class="p-5">
                
                <!-- form start -->
                <form action="functions/create.php" method="post">

                    <div class="mb-3">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" class="border rounded shadow p-2 block w-1/3">
                    </div>

                    <div class="mb-3">
                        <label for="alamat_email">Alamt Email</label>
                        <input type="email" id="alamat_email" name="alamat_email" class="border rounded shadow p-2 block w-1/3">
                    </div>

                    <div class="mb-3">
                        <label for="nomor_hp">Nomor HP</label>
                        <input type="tel" id="nomor_hp" name="nomor_hp" class="border rounded shadow p-2 block w-1/3">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="border rounded shadow p-2 bg-green-700 text-white" name="proses" value="tambah">
                            <i class="fa-solid fa-paper-plane mr-1"></i>
                            Tambah
                        </button>
                        <button type="reset" class="border rounded shadow p-2 bg-gray-700 text-white">
                            <i class="fa-solid fa-times mr-1"></i>Batal
                        </button>
                    </div>

                </form>
                <!-- form end -->

            </div>