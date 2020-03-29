<div class="hcf_box">
    <style scoped>
        .hcf_box{
            display: grid;
            grid-template-columns: max-content 1fr;
            grid-row-gap: 10px;
            grid-column-gap: 20px;
        }
        .hcf_field{
            display: contents;
        }
    </style>
    <p class="meta-options hcf_field">
        <label for="hcf_title">Title</label>
        <input id="hcf_title" 
        type="text" 
        name="hcf_title"
        value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_title', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="hcf_description">Description</label>
        <input id="hcf_description" 
        type="text" 
        name="hcf_description"
        value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_description', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="hcf_id">Imdb id</label>
        <input id="hcf_id" 
        type="text" 
        name="hcf_id"
        value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_id', true ) ); ?>">
    </p>
    
</div>