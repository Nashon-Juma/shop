@component('shop::emails.layout')
    <div style="padding: 20px; background-color: #f9f9f9; border-radius: 8px;">
        <h2 style="color: #2c3e50; text-align: center;">@lang('shop::app.emails.customers.verification.subject')</h2>

        <div style="margin: 20px 0; padding: 15px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <p style="font-weight: bold; font-size: 20px; color: #121A26; line-height: 24px; margin-bottom: 24px;">
                @lang('shop::app.emails.dear', ['customer_name' => $customer->name]), 👋
            </p>

            <p style="font-size: 16px; color: #384860; line-height: 24px;">
                @lang('shop::app.emails.customers.verification.greeting')
            </p>
        </div>

        <div style="margin: 20px 0; padding: 15px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <p style="font-size: 16px; color: #384860; line-height: 24px; margin-bottom: 40px;">
                @lang('shop::app.emails.customers.verification.description')
            </p>
        </div>

        <div style="text-align: center; margin-bottom: 95px;">
            <a
                href="{{ route('shop.customers.verify', $customer->token) }}"
                style="display: inline-block; padding: 16px 45px; border-radius: 5px; background: #060C3B; color: #FFFFFF; text-decoration: none; text-transform: uppercase; font-weight: 700; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);"
            >
                @lang('shop::app.emails.customers.verification.verify-email')
            </a>
        </div>

        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ config('app.url') }}" style="display: inline-block; padding: 10px 20px; font-size: 16px; color: #ffffff; background-color: #3498db; border-radius: 5px; text-decoration: none;">
                @lang('shop::app.emails.contact-us.visit-website')
            </a>
        </div>
    </div>
@endcomponent
