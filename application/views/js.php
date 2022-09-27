<script
         src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
         crossorigin="anonymous"
      ></script>

      <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>

      <script>
         /* ====== Navbar ====== */
         function openNav() {
            document.getElementById("myNav").style.width = "100%";
         }
         function closeNav() {
            document.getElementById("myNav").style.width = "0%";
         }
         /* ====== End Navbar ====== */

         /* ====== Aside Our Briquettes ====== */
         var splide = new Splide(".splide", {
            perPage: 4,
            rewind: true,
            drag: "free",
         });

         splide.mount();
         /* ====== End Aside Our Briquettes ====== */
      </script>
      <script
      src="https://kit.fontawesome.com/32f82e1dca.js"
      crossorigin="anonymous"
    ></script>
    <script src="<?php echo base_url()?>asset/js/index.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script>
    function clear(){
		$('form').trigger("reset");
		$('form input, form select, form textarea, form button').prop("disabled",false);
		$(".kelompok-detail:not(:first)").remove();
	   }
   </script>
   <script>
	function hapus(id,tabel){
		Swal.fire({
			html:
				'<p class="font-16 font-weight-bold mt-3" style="font-family: Roboto, sans-serif"><b>Apakah Anda yakin ingin menghapus Data ini?</b></p><br><p class="font-weight-regular mb-1 px-3" style="font-family: Roboto, sans-serif; font-size: 16px;color: #7C8CA3!important " text-align="justify">Data yang telah dihapus tidak akan bisa dipulihkan kembali.</p>',
			showCancelButton: true,
			cancelButtonText: "Batal",
			confirmButtonText: 'Hapus',
			confirmButtonColor: '#dc3545',
			reverseButtons: true
		}).then((result) => {
			if(result.value){
				$.ajax({
					url : "<?php echo base_url();?>"+tabel+"/hapus",
					type : "POST",
					data : {
						id : id
					},
					success : function(data) {
						new PNotify({
							title: 'Sukses',
							text: 'Berhasil Dihapus',
							type: 'success',
							nonblock: {
								nonblock: true
							},
							styling: 'bootstrap3'
						});
						setTimeout(
							function() {
								location.reload();
							}, 1000
						);
					},
					error : function () {
						new PNotify({
							title: 'Gagal',
							text: 'Gagal Dihapus',
							type: 'error',
							nonblock: {
								nonblock: true
							},
							styling: 'bootstrap3'
						});
						setTimeout(
							function() {
								location.reload();
							}, 1000
						);
					}
				});
			}
		});
	}
	</script>
<script src="<?php echo base_url();?>asset/js/pnotify/dist/pnotify.js"></script>
<script src="<?php echo base_url();?>asset/js/pnotify/dist/pnotify.buttons.js"></script>
<script src="<?php echo base_url();?>asset/js/pnotify/dist/pnotify.nonblock.js"></script>
		<script src="<?php echo base_url();?>asset/js/sweetalert2/sweetalert2.min.js"></script>
