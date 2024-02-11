<div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">

    <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
      <input class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search" placeholder="Search..." aria-label="Search">
      <span class="fas fa-search search-box-icon"></span>
    </form>

    <!-- close -->
    <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search">
        <button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button>
    </div>

    <!-- search list -->
    <div class="dropdown-menu border border-300 font-base start-0 py-0 overflow-hidden w-100">
      <div class="scrollbar-overlay" style="max-height: 30rem;">
        <div class="list pb-3">
            
            <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Last Articals</h6>
            <div class="py-2">
            {% for article in articals %}
              <a class="dropdown-item" href="">{{-- href {{ article.get_absolute_url }} --}}
                
                <div class="d-flex align-items-center">
                  <div class="fw-normal text-1000 title"><span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span></div> {{--  {{article.title|truncatechars:50 }} --}}
                  
                </div>
              </a>
            {% endfor %}
            </div>

            <hr class="text-200 my-0">
            <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Quick Links</h6>
            <div class="py-2">

                <a class="dropdown-item" href="{% url 'How-it-works' %}">
                <div class="d-flex align-items-center">
                    <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> How it works</div>
                </div>
                </a>

                <a class="dropdown-item" href="{% url 'privacy-policy' %}">
                    <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> Privacy policy</div>
                    </div>
                </a>

                <a class="dropdown-item" href="{% url 'terms-of-service' %}">
                    <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> Terms of Service</div>
                    </div>
                </a>

                <a class="dropdown-item" href="{% url 'refund-policy' %}">
                    <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> Refund policy</div>
                    </div>
                </a>

                <a class="dropdown-item" href="{% url 'knowledgebase' %}">
                    <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> Knowledgebase</div>
                    </div>
                </a>

                <a class="dropdown-item" href="{% url 'about' %}">
                    <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> About US</div>
                    </div>
                </a>

                <a class="dropdown-item" href="{% url 'contact' %}">
                    <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> Contact Us</div>
                    </div>
                </a>

            </div>

        </div>
        <div class="text-center">
          <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
        </div>
      </div>
    </div>

  </div>