<x-dashboard-layout>
    <x-dashboard.main title="Add new client">
            <form action="/dashboard/clients/" method="POST" class="flex items-start gap-6">
                @csrf
                <div class="bg-white flex-1 p-6 rounded-3xl flex flex-col gap-8">
                    <x-dashboard.forms.form-block label="Company information">
                        <x-inputs.text 
                        id="name" 
                        name="name" 
                        placeholder="MogulZ Media" 
                        label="Company Name" 
                        required="true" />

                        <x-inputs.select 
                        id="industry" 
                        name="industry" 
                        label="Industry"
                        required="true"
                        :options="[
                                'automotive' => 'Automotive',
                                'beauty' => 'Beauty',
                                'construction_real_estate' => 'Construction & Real Estate',
                                'consulting' => 'Consulting',
                                'education' => 'Education',
                                'ecommerce' => 'Ecommerce',
                                'fashion' => 'Fashion',
                                'finance' => 'Finance',
                                'fitness' => 'Fitness',
                                'food' => 'Food',
                                'healthcare' => 'Healthcare',
                                'home_interior' => 'Home & Interior',
                                'hospitality_travel' => 'Hospitality & Travel',
                                'legal_services' => 'Legal Services',
                                'manufacturing' => 'Manufacturing',
                                'marketing_advertising' => 'Marketing & Advertising',
                                'media_entertainment' => 'Media & Entertainment',
                                'nonprofit' => 'Nonprofit',
                                'pet_care' => 'Pet Care',
                                'professional_services' => 'Professional Services',
                                'restaurants_cafes' => 'Restaurants & Cafes',
                                'saas_tech' => 'SaaS & Technology',
                                'sports' => 'Sports',
                                'telecommunications' => 'Telecommunications',
                                'other' => 'Other'
                            ]"/>

                        <x-inputs.text 
                        id="website" 
                        name="website" 
                        type="url"
                        placeholder="mogulzmedia.com" 
                        label="Website" 
                         />

                         <x-inputs.text
                         id="country"
                         name="country"
                         placeholder="Spain"
                         label="Country"
                         />

                        <x-inputs.text 
                        id="city"
                        name="city"
                        placeholder="Madrid"
                        label="City"
                        />

                        <x-inputs.file 
                        id="logo"
                        name="logo_path"
                        label="Company Logo"
                        />

                    </x-dashboard.forms.form-block>

                    <x-dashboard.forms.form-block label="Primary contact">
                        <x-inputs.text
                        id="contact_name"
                        name="contact_name"
                        placeholder="Carlos Higuera"
                        label="Contact name"
                        required="true"
                        />

                        <x-inputs.text
                        id="email"
                        name="email"
                        type="email"
                        placeholder="carlos@mogulzmedia.com"
                        label="Email address"
                        required="true"
                        />

                        <x-inputs.text
                        id="phone"
                        name="phone"
                        type="number"
                        placeholder="+34 678 948 374"
                        label="Phone number"
                        />

                        <x-inputs.select
                        id="job_title"
                        name="job_title"
                        label="Job title"
                        :options="[
                            'ceo' => 'Chief Executive Officer (CEO)',
                            'founder' => 'Founder',
                            'co-founder' => 'Co-Founder',
                            'owner' => 'Owner',
                            'cmo' => 'Chief Marketing Officer (CMO)',
                            'marketing_manager' => 'Marketing Manager',
                            'paid_media_manager' => 'Paid Media Manager',
                            'social_media_manager' => 'Social Media Manager',
                            'brand_manager' => 'Brand Manager',
                            'sales_manager' => 'Sales Manager',
                            'product_manager' => 'Product Manager (PM)',
                            'creative_director' => 'Creative Director',
                            'other' => 'Other'
                        ]"
                        />
                    </x-dashboard.forms.form-block>

                    <x-dashboard.forms.form-block gap="2" label="Client status">
                        <div class="flex items-center gap-6">
                            <x-inputs.radio 
                            id="onboarding"
                            name="client_status"
                            value="onboarding"
                            title="Onboarding"
                            icon="fas fa-clipboard"
                            message="Your client is still in the onboarding phase."
                            />

                            <x-inputs.radio 
                            id="active"
                            name="client_status"
                            value="active"
                            title="Active"
                            icon="fas fa-chart-line"
                            message="You’re already working with the client."
                            />
                        </div>

                        <div class="flex items-center gap-6">
                            <x-inputs.radio 
                            id="paused"
                            name="client_status"
                            value="paused"
                            title="Paused"
                            icon="fas fa-pause"
                            message="Client paused for future work."
                            />

                            <x-inputs.radio 
                            id="draft"
                            name="client_status"
                            value="draft"
                            title="Draft"
                            icon="fas fa-box"
                            message="Make a draft to save it for later."
                            />
                        </div>
                    </x-dashboard.forms.form-block>

                    <x-dashboard.forms.form-block label="Budget and schedule">
                        <x-inputs.text
                        id="start_date"
                        name="start_date"
                        type="date"
                        placeholder="03 / 08 2026"
                        label="Start Date"
                        />

                        <x-inputs.select 
                        id="currency"
                        name="currency"
                        label="Currency"
                        required="true"
                        :options="[
                            'USD' => 'US Dollar ($)',
                            'EUR' => 'Euro (€)',
                            'GBP' => 'British Pound (£)',
                            'CHF' => 'Swiss Franc (CHF)',
                            'IRR' => 'Iranian Rial (﷼)',
                            'CAD' => 'Canadian Dollar (CA$)',
                            'AUD' => 'Australian Dollar (A$)',
                            'NZD' => 'New Zealand Dollar (NZ$)',
                            'JPY' => 'Japanese Yen (¥)',
                            'CNY' => 'Chinese Yuan (CN¥)',
                            'INR' => 'Indian Rupee (₹)',
                            'SGD' => 'Singapore Dollar (S$)',
                            'HKD' => 'Hong Kong Dollar (HK$)',
                            'AED' => 'UAE Dirham (AED)',
                            'SAR' => 'Saudi Riyal (SAR)',
                            'SEK' => 'Swedish Krona (SEK)',
                            'NOK' => 'Norwegian Krone (NOK)',
                            'DKK' => 'Danish Krone (DKK)',
                            'MXN' => 'Mexican Peso (MX$)',
                            'BRL' => 'Brazilian Real (R$)',
                            'PLN' => 'Polish Złoty (zł)'
                        ]"
                        />

                        <x-inputs.text 
                        id="monthly_budget"
                        name="monthly_budget"
                        placeholder="3.840€"
                        type="number"
                        label="Monthly budget"
                        />
                    </x-dashboard.forms.form-block>
                    
                    <x-dashboard.forms.form-block gap="2" label="Advertising platforms">
                        <div class="flex items-center gap-6">
                            <x-inputs.radio 
                            id="meta"
                            name="advertising_platforms"
                            value="meta"
                            title="Meta Ads"
                            icon="fab fa-meta"
                            />

                            <x-inputs.radio 
                            id="google"
                            name="advertising_platforms"
                            value="google"
                            title="Google Ads"
                            icon="fab fa-google"
                            />
                        </div>
                        <div class="flex items-center gap-6">
                            <x-inputs.radio 
                            id="tiktok"
                            name="advertising_platforms"
                            value="tiktok"
                            title="TikTok Ads"
                            icon="fab fa-tiktok"
                            />

                            <x-inputs.radio 
                            id="linkedin"
                            name="advertising_platforms"
                            value="linkedin"
                            title="Linkedin Ads"
                            icon="fab fa-linkedin"
                            />
                        </div>
                    </x-dashboard.forms.form-block>
                </div>
                <x-dashboard.forms.summary 
                summaryTitle="Client Summary"
                :fields="[
                    'Company name' => 'MogulZ Media',
                    'Client status' => 'Onboarding',
                    'Total fields' => 13,
                    'Required' => '4/4',
                    'Status' => 'Ready'
                ]"
                />
            </form>
        </div>
    </x-dashboard.main>
</x-dashboard-layout>