<section id="faq" class="mt-3">
    <div class="relative bg-gray-600 rounded-2xl">
    <div class="h-60 absolute bottom-0 xl:inset-0 xl:h-full xl:w-full">
    <div class="h-full w-full xl:grid xl:grid-cols-2">
      <div class="h-full xl:relative xl:col-start-2">
        <img class="h-full w-full object-cover opacity-40 xl:absolute xl:inset-0" src="{{ asset('/img/workspace.jpg') }}">
          <div aria-hidden="true" class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-gray-600 xl:inset-y-0 xl:left-0 xl:h-full xl:w-32 xl:bg-gradient-to-r"></div>
      </div>
    </div>
  </div>
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8 xl:grid xl:grid-cols-2 xl:grid-flow-col-dense xl:gap-x-8 ">
        <div class="relative pt-12 pb-64 sm:pt-24 sm:pb-64 xl:col-start-1 xl:pb-24">
          <p class="text-4xl mt-3 font-extrabold text-white">Frequently Asked Questions</p>
          <p class="text-lg mt-7 text-gray-300">If you do not find the answers to your questions listed below please feel free to contact us.</p>
          <div class="mt-10 flex-col mb-10" >
    
            <div class="col-span-full my-10" x-data="{ open: false }">
                <div>
                  <div class="text-white font-bold cursor-pointer inline-flex" @mouseover="open = true" @mouseleave="open = false" >
                    <div x-data="{ open: true }" class="mr-2">

                    <x-icon.chevron-right />
                      
                    </div>
                  Which plan is right for my organization?
                  </div>
                  <div  x-show="open"  class="col-span-full text-gray-100 font-normal transition ease-in-out duration-1000 pl-7">
                    We understand that each organization is unique, requiring specific features to support its members and reporting needs. Above you can see the features included in the different plans to support your needs.
                  </div>
                </div>
            </div> 

            <div class="col-span-full my-6" x-data="{ open: false }">
                <div>
                  <div class="text-white font-bold cursor-pointer inline-flex" @mouseover="open = true" @mouseleave="open = false" >
                    <div x-data="{ open: true }" class="mr-2">
                      
                    <x-icon.chevron-right />

                    </div>
                    Can I access Zeitplans on my smartphone?
                  </div>
                  <div  x-show="open"  class="col-span-full text-gray-100 font-normal transition ease-in-out duration-1000 pl-7">
                    We understand that each organization is unique, requiring specific features to support its members and reporting needs. Above you can see the features included in the different plans to support your needs.
                  </div>
                </div>
            </div> 

            <div class="col-span-full my-6" x-data="{ open: false }">
                <div>
                  <div class="text-white font-bold cursor-pointer inline-flex" @mouseover="open = true" @mouseleave="open = false" >
                    <div x-data="{ open: true }" class="mr-2">
                      
                    <x-icon.chevron-right />

                    </div>
                    What if I change my mind?
                  </div>
                  <div  x-show="open"  class="col-span-full text-gray-100 font-normal transition ease-in-out duration-1000 pl-7">
                    We understand that each organization is unique, requiring specific features to support its members and reporting needs. Above you can see the features included in the different plans to support your needs.
                  </div>
                </div>
            </div> 

            <div class="col-span-full my-6" x-data="{ open: false }">
                <div>
                  <div class="text-white font-bold cursor-pointer inline-flex" @mouseover="open = true" @mouseleave="open = false" >
                    <div x-data="{ open: true }" class="mr-2">
                      
                    <x-icon.chevron-right />

                    </div>
                  What will the URL to my account look like?
                  </div>
                  <div  x-show="open"  class="col-span-full text-gray-100 font-normal transition ease-in-out duration-1000 pl-7">
                  You will be able to choose a subdomain name ( OrgName.Zeitplans.com ) when you signup.
                  </div>
                </div>
            </div> 


            <div class="col-span-full my-6" x-data="{ open: false }">
                <div>
                  <div class="text-white font-bold cursor-pointer inline-flex" @mouseover="open = true" @mouseleave="open = false" >
                    <div x-data="{ open: true }" class="mr-2">
                      
                    <x-icon.chevron-right />

                    </div>
                    How secure is Zeitplans.com?
                  </div>
                  <div  x-show="open"  class="col-span-full text-gray-100 font-normal transition ease-in-out duration-1000 pl-7">
                    The security of our customer’s data is our top priority. Zeitplans.com is built with strict security requirements and protocols to secure your data, such as ISO/IEC 27001 and ISO/IEC 27018, and is undergoing annual security audits and assessments. We use high physical, procedural, and technical security measures to preserve the integrity and security of your data, as well as adhering to the strictest data protection laws.
                  </div>
                </div>
            </div> 

            <div class="col-span-full my-6 mb-20" x-data="{ open: false }">
                <div>
                  <div class="text-white font-bold cursor-pointer inline-flex" @mouseover="open = true" @mouseleave="open = false" >
                    <div x-data="{ open: true }" class="mr-2">
                      
                    <x-icon.chevron-right />
                    
                    </div>
                    What payment types do you accept?
                  </div>
                  <div  x-show="open"  class="col-span-full text-gray-100 font-normal transition ease-in-out duration-1000 pl-7">
                  We accept the following payment methods: All the major credit cards (excluding debit cards) - Visa, Master Card, American Express, Discover. You can also purchase your Zeitplans.com subscription with PayPal.
                  </div>
                </div>
            </div> 
            
          </div>
          </div>
        </div>
      </div>
    </div> 