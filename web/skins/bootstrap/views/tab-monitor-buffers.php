<div role="tabpanel" class="tab-pane" id="buffers">
	<div class="form-group">
		<label for="ImageBufferCount"><?= $SLANG['ImageBufferSize'] ?></label>
		<input id="ImageBufferCount" type="number" class="form-control" ng-model="monitor.ImageBufferCount" required />
	</div>
	<div class="form-group">
		<label for="WarmupCount"><?= $SLANG['WarmupFrames'] ?></label>
		<input id="WarmupCount" type="number" class="form-control" ng-model="monitor.WarmupCount" required />
	</div>
	<div class="form-group">
		<label for="PreEventCount"><?= $SLANG['PreEventImageBuffer'] ?></label>
		<input id="PreEventCount" type="number" class="form-control" ng-model="monitor.PreEventCount" required />
	</div>
	<div class="form-group">
		<label for="PostEventCount"><?= $SLANG['PostEventImageBuffer'] ?></label>
		<input id="PostEventCount" type="number" class="form-control" ng-model="monitor.PostEventCount" required />
	</div>
	<div class="form-group">
		<label for="StreamReplayBuffer"><?= $SLANG['StreamReplayBuffer'] ?></label>
		<input id="StreamReplayBuffer" type="number" class="form-control" ng-model="monitor.StreamReplayBuffer" required />
	</div>
	<div class="form-group">
		<label for="AlarmFrameCount"><?= $SLANG['AlarmFrameCount'] ?></label>
		<input id="AlarmFrameCount" type="number" class="form-control" ng-model="monitor.AlarmFrameCount" required />
	</div>
</div>