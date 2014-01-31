<div class="users index">
    <div class="top-image">
        <h2>WeatherMail</h2>
        <p>You can get notification when it will rain!!</p>
        <?php echo $this->Form->create('User'); ?>
        <?php echo $this->Form->input('email'); ?>
        <?php echo $this->Form->input('password'); ?>
        <?php echo $this->Form->end(__('Sign Up!')); ?>
    </div>
    <div class="feature">
        <ul>
            <ol>feature1</ol>
            <ol>feature2</ol>
            <ol>feature3</ol>
        </ul>
    </div>
</div>
