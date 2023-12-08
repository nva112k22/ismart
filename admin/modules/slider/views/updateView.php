<?php
get_header();
?>

<div id="main-content-wp" class="add-cat-page">
    <style>
        p.error {
            font-size: 13px;
            color: #e25959;
        }
        p.success {
            font-size: 15px;
            color: #4fa327;
        }
    </style>
    <div class="wrap clearfix">
        <?php echo get_sidebar(); ?>
        <div id="content" class="fl-right">      
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Cập nhật slider</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form enctype="multipart/form-data" action="" method="POST">
                        <?php echo form_success('success'); ?>
                        <?php echo form_error('error_image'); ?>
                         <label for="title">Tên slider</label>
                         <input type="text" name="title" id="title" value="<?php echo $info_slider['name']; ?>">
                        <?php echo form_error('title'); ?>
                        <label for="title">Link</label>
                        <input type="text" name="slug" id="slug" value="<?php echo $info_slider['link']; ?>">
                        <?php echo form_error('slug'); ?>
                        <label for="desc">Mô tả</label>
                        <textarea name="descs" id="desc" class="ckeditor"><?php echo $info_slider['descs']; ?></textarea>
                        <?php echo form_error('descs'); ?>
                        <label for="num-order">Thứ tự</label>
                        <input type="text" name="orders" id="num-order" value="<?php echo $info_slider['orders']; ?>">
                        <?php echo form_error('orders'); ?>
                        <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="file" id="upload-thumb">
                            <input type="submit" name="btn_upload_thumb" value="Upload" id="btn_upload_thumb">
                          <img class="images" src="<?php if(!empty($info_slider['image_url'])) echo $info_slider['image_url']; else echo 'img-thumb.png'; ?>">
                        </div>
                        <?php echo form_error('file'); ?>
                        <label>Trạng thái</label>
                        <select name="status">
                            <option value="">-- Chọn trạng thái --</option>
                            <option value="1">Công khai</option>
                            <option value="2">Chờ duyệt</option>
                            <option value="<?php echo $info_slider['status'];?>" selected><?php echo $info_slider['status'];?></option>
                        </select>
                        <?php echo form_error('status'); ?>
                        <button type="submit" name="btn_page_update" id="btn_page_update">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
