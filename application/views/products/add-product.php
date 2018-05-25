<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Add Products</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>Add Item</button>
                                </div>
                            </div>
                        </div>
                </div>
                <hr>
                <div class="col-sm-12">
                <form method='post' action=''>
                    <!-- Textarea -->
                    <textarea class='editor' name='content'>
                    <?php if(isset($content)){ echo $content; } ?> 
                    </textarea>
                    <br>
                    <button class="btn btn-primary" type='submit' value='Submit' name='submit'>Add Product</button>
                </form>

                
            </div>
</div>