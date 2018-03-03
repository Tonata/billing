
<div class="">
    <div style="overflow: hidden;">
        <select <?= implode(' ', $select_tag_attributes) ?> name="<?= $name?>" id="<?= $name?>" data-container="body" style="height: 36px">
            @foreach($lists as $list )
                <option <?= implode(' ', $option_tag_attributes) ?>
                        data-subtext="(<?= $list->name?>)"
                        value="<?= $list->id ?>">
                    <?= $list->name ?>
                </option>
            @endforeach
        </select>
    </div>
</div>