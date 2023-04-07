<?php
require('db.php');

$val = $_GET['no'];
$sql = "SELECT user_id, title, text  from post where no = $val;";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

require('head.php');
require('header.html');




?>


<div class="container">
	<div class="row">




		<div class="col-md-8 col-md-offset-2">



			<table class="table">

				<tbody>
					<tr>
						<td>
							<h3>
								<p class="text-center">
									<?php
									echo $row[1];
									?>
								</p>
							</h3>
						</td>
					</tr>

					<tr>

						<td>
						<p class="text-end">
									<?php
									echo $row[0];
									?>
								</p>
						</td>

					</tr>
					<tr>
						<td>
						<p class="text-start">
									<?php
									echo $row[2];
									?>
								</p>
						</td>

					</tr>
				</tbody>

			</table>










		</div>

	</div>
</div>



<script>
	window.onscroll = function(ev) {
		if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
			alert('bottom');
		}
	};
</script>