<div class="relative" style="width: 200px; height: 400px;">
    <div class="rounded-xl border-none box w-full h-full absolute text-center bg-white" style="top: 51px; left: 0;">
        <div class="leading-3 pt-16">
            <div class="text-base font-bold">
				@if(isset($user_data) && !empty($user_data))
					{!! $user_data->{'first name'} . ' ' . $user_data->{'last name'} !!}
				@endif
			</div>
            <div class="text-xs pl-2" style="color: #8f8f8f;">
				@if(isset($user_data) && !empty($user_data))
					{!! $user_data->user_type !!}
				@endif
			</div>
        </div>
    </div>
    <img src="{!! URL::asset('images\dashboard\Default Profile Pic.jpg') !!}" class="w-24 h-24 rounded-full relative" style="z-index: 9; margin-left: 27%;">
</div>
