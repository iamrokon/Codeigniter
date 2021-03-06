<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Forms</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Form Elements</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url();?>super_admin/save_product" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Add Product</legend>
                    <h3>
                        <?php
                            $msg=$this->session->userdata('message');
                            if($msg)
                            {
                                echo $msg;
                                $this->session->unset_userdata('message');
                            }
                        ?>
                    </h3>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Name </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="product_name" >
                            
                       </div>
                    </div>
                   <div class="control-group">
                        <label class="control-label" for="typeahead">Category Name  </label>
                        <div class="controls">
                            <select name="category_id">
                                <option>Select Category Name....</option>
                                <?php
                                foreach($all_published_category as $v_category)
                                {
                                ?>
                                <option value="<?php echo $v_category->category_id;?>"><?php echo $v_category->category_name;?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Manufacturer Name  </label>
                        <div class="controls">
                            <select name="manufacturer_id">
                                <option>Select manufacturer name...</option>
                                <?php
                                foreach($all_published_manufacturer as $v_manufacturer)
                                {
                                ?>
                                <option value="<?php echo $v_manufacturer->manufacturer_id?>"><?php echo $v_manufacturer->manufacturer_name?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Product Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="product_description" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Price </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="product_price" >
                            
                       </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Quantity </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="product_quantity" >
                            
                       </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Featured Prouduct</label>
                        <div class="controls">
                            <label class="checkbox inline">
                                <input type="checkbox" id="inlineCheckbox1" name="featured_product">
                            </label>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fileInput">Product Images</label>
                        <div class="controls">
                            <input class="input-file uniform_on" id="fileInput" type="file" name="product_images">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Publication Status</label>
                        <div class="controls">
                            <select name="publication_status">
                                <option>Select Status...</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save Product</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->