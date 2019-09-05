<?php include "header.php"; ?>
<?php
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM news where id= :post_id");
	$result->bindParam(':post_id', $id);
	$result->execute();
	$news = $result->fetch();
	echo "<pre>";
	// var_dump($result->fetch());
	echo "</pre>";
?>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Post News</h3>
					<div class="xs">
						
						<div class="col-md-8 inbox_right">
							<div class="Compose-Message">               
								<div class="panel panel-default">
									<div class="panel-heading">
										Edit News 
									</div>
									 <?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "News Updated Successfully!")?>
                                            </div>
                                     <?php endif;?>
									<div class="panel-body panel-body-com-m">
										
										<form class="com-mai" action="update-news.php" method="post" enctype="multipart/form-data">
												<label>News Title : </label>
												<input type="text" name="news_title" class="form-control1 control3" placeholder="News Title" value="<?php echo $news['news_title'] ?>">
												<input type="hidden" name="newsid" value="<?php echo $news['id']?>">
												<label>News Detail : </label>
												<textarea rows="6" id="editor" name="news_detail" class="form-control1 control2">
													<?php echo ($news['news_detail']); ?>
												</textarea>
												<label>Add Photo</label>
							<input type="file" name="file" class="form-control1 control3">
						
						
											<hr>
											<input type="submit" value="Update News">
										</form>
									</div>
								 </div>
							  </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<script>
            CKEDITOR.replace( 'editor' );
        </script>
		<?php include "footer.php"; ?>