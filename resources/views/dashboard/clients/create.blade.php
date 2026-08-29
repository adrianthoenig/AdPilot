<x-dashboard-layout>
    <x-dashboard.main title="Add new client">
            <form action="/dashboard/clients/" method="POST" class="flex gap-6">
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
                        :options="[
                                'ecommerce' => 'Ecommerce',
                                'marketing' => 'Marketing'
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
                        name="logo"
                        label="Company Logo"
                        />

                    </x-dashboard.forms.form-block>

                    <x-dashboard.forms.form-block label="Primary contact">
                        <x-inputs.text
                        id="primary_contact_name"
                        name="primary_contact_name"
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
                            'cmo' => 'Chief Marketing Officer (CMO)',
                            'ceo' => 'Chief Executive Officer (CEO)'
                        ]"
                        />
                    </x-dashboard.forms.form-block>
                </div>
                <div class="bg-white p-6 rounded-xl flex gap-6">

                </div>
            </form>
        </div>
    </x-dashboard.main>
</x-dashboard-layout>