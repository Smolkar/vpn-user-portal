<?php $this->layout('base', ['activeItem' => 'messages', 'pageTitle' => $this->t('Messages')]); ?>
<?php $this->start('content'); ?>
    <h2><?=$this->t('System'); ?></h2>
    <p>
        <?=$this->t('All users will see this "Message of the Day" (MOTD) message when logging in to the portal, or when connecting to the VPN using an application supporting the API.'); ?>
    </p>

    <form class="frm" method="post">
        <fieldset>
            <label for="motd_message"><?=$this->t('MOTD'); ?></label>
            <textarea id="motd_message" name="message_body" rows="8"><?php if ($motdMessage): ?><?=$this->e($motdMessage['message']); ?><?php endif; ?></textarea>
        </fieldset>
        <fieldset>
            <button name="message_action" value="set" type="submit"><?=$this->t('Set'); ?></button>
            <?php if ($motdMessage): ?>
                <input type="hidden" name="message_id" value="<?=$this->e($motdMessage['id']); ?>">
                <button class="warning" name="message_action" value="delete"><?=$this->t('Delete'); ?></button>
            <?php endif; ?>
        </fieldset>
    </form>
<?php $this->stop('content'); ?>
