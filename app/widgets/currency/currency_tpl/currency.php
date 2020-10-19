<li value="" class="label"><a class="currency_code" style="color: white" href="currency/change?curr=<?=$this->currency['code'];?>"><?=$this->currency['code'];?></a></li>
<?php foreach($this->currencies as $k => $v): ?>
    <?php if($k != $this->currency['code']): ?>
        <li value="<?=$k;?>"><a class="currency_code" style="color: white" href="currency/change?curr=<?=$k;?>"><?=$k;?></a></li>
    <?php endif; ?>
<?php endforeach; ?>