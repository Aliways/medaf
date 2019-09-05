<div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Inspiring Articles</h2>
          </div>
        </div>
        <div class="row d-flex">
          <?php
            $conn = new mysqli('localhost', 'root', '', 'medaf/blog');
            $sql = "SELECT * FROM news LIMIT 3";
            $q = $conn->query($sql);
            
            // var_dump($posts);
          ?>
        <?php while($posts = $q->fetch_assoc()){ ?>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog/news_post.php?id=<?php echo $posts['id']?>" class="block-20" style="background-image: url('<?php echo './blog/uploads/'.$posts['file'] ?>');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="blog/news_post.php?id=<?php echo $posts['id']?>"><?php echo $posts['news_title'] ?></a></h3>
                <p><?php echo substr($posts['news_detail'], 0, 200) ?></p>
              </div>
            </div>
          </div>
        <?php } ?>

          <!-- <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/unilag.png');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="importance_of_education.php">The Importance of Education</a></h3>
                <p>It is no secret that a good education has the power to change a life.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/img1.png');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="ux_career.php">How to standout at start of your UX Career</a></h3>
                <p>UX Design is a career for you if you have relevant education, you are interested in design thinking, you want to study human’s behaviors, or you love innovation and creativity.</p>
              </div>
            </div>
          </div> -->
        </div>
      </div>