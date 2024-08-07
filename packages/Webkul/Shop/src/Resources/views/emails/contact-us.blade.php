@component('shop::emails.layout')
    <div style="padding: 20px; background-color: #f9f9f9; border-radius: 8px;">
        <h2 style="color: #2c3e50; text-align: center;">@lang('shop::app.emails.contact-us.title')</h2>

        <div style="margin: 20px 0; padding: 15px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <p style="font-size: 16px; color: #384860; line-height: 24px;">
                {{ $contactUs['message'] }}
            </p>
        </div>

        <div style="margin: 20px 0; padding: 15px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <p style="font-size: 16px; color: #384860; line-height: 24px; margin-bottom: 20px;">
                @lang('shop::app.emails.to')

                <a href="mailto:{{ $contactUs['email'] }}" style="color: #3498db;">{{ $contactUs['email'] }}</a>,

                @lang('shop::app.emails.contact-us.reply-to-mail')

                @if($contactUs['contact'])
                    @lang('shop::app.emails.contact-us.reach-via-phone')

                    <a href="tel:{{ $contactUs['contact'] }}" style="color: #3498db;">{{ $contactUs['contact'] }}</a>.
                @endif
            </p>
        </div>

        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ config('app.url') }}" style="display: inline-block; padding: 10px 20px; font-size: 16px; color: #ffffff; background-color: #3498db; border-radius: 5px; text-decoration: none;">
                @lang('shop::app.emails.contact-us.visit-website')
            </a>
        </div>
    </div>
@endcomponent
