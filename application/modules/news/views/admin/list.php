<!-- Box Header: Start -->
<div class="box_top">
    
    <h2 class="icon pages">Content List<span class="tip" title="Total Records"><?=$this->admin_news_model->count_contents();?></h2>

    
</div>
<!-- Box Header: End -->

<!-- Box Content: Start -->
<div class="box_content">
    
<div id="listing">
        
        <table class="sorting">

            <thead>
                <tr>
                    <th class="checkers"><input type="checkbox" class="checkall" /></th>
                    <th class="align_left">Title</th>
                    <th class="align_left center">Author</th>
                    <th class="align_left center">Views</th>
                    <th class="align_left center">Added</th>
                    <th class="align_left center tools">Tools</th>
                </tr>
            </thead>
            
            <tbody>
            <?php foreach($contents as $list):?>
                <tr>
                    <th class="checkers"><input type="checkbox" /></th>
                    <td class="align_left"><a href="#"><?=$list->title?></a></td>
                    <td class="align_left center"><a href="#messages" class="popup"><?=$list->insert_id?></a></td>
                    <td class="align_left center"><?=$list->hit?></td>
                    <td class="align_left center"><?=date("d.m.y H:i:s", $list->insert_date)?></td>
                    <td class="align_left tools center">
                        <a href="#" class="edit tip" title="edit">edit</a>
                        <a href="#" class="view tip" title="view">view</a>
                        <a href="#" class="delete tip" title="delete">delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>

    </div>
    
</div>
<!-- Box Content: End -->