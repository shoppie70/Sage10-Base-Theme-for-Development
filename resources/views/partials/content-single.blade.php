<article @php(post_class())>
  <header>
      @include('partials.page-header', ['page_title' => 'ニュース＆ブログ', 'title_en' => 'news'])
  </header>

  <main class="">
      <section class="py-16" style="background-color: #fff6f7;">
          <div class="post-content">
              <div class="post-archive bg-white p-4">
                  <div class="mb-4">
                    <span class="inline-block post-item__category">
                    {{ get_the_category()[0]->cat_name }}
                    </span>
                    <time class="my-1 block post-item__datetime" datetime="{{ get_the_date( 'Y-m-d' ) }}">
                      {{ get_the_date( 'Y年m月d日' ) }}
                    </time>
                  </div>
                  <h1 class="text-xl font-bold border-b border-dashed pb-1 mb-4">
                      {!! get_the_title() !!}
                  </h1>
                  <div class="leading-relaxed">
                    @php(the_content())
                  </div>
                  <div class=" flex justify-between mt-8 px-4">
                      <div class="text-left" style="width: 50%;">
                          <?php $previous_post = get_previous_post(true); ?>
                          @if(!empty( $previous_post ))
                              <div class="single-btn_wrap">
                                  <?php  previous_post_link('%link', '<　前へ', true); ?>
                              </div>
                              <div class="mt-2 text-sm">
                                  <a href="<?php echo get_permalink($previous_post->ID); ?>">
                                      <?php echo $previous_post->post_title; ?>
                                  </a>
                              </div>
                          @endif
                      </div>
                      <div class="text-right" style="width: 50%;">
                          <?php
                          $next_post = get_next_post(true);
                          ?>
                          @if(!empty( $next_post ))
                              <div class="single-btn_wrap">
                                  <?php next_post_link('%link', '次へ　>', true) ?>
                              </div>
                              <div class="mt-2 text-sm">
                                  <a href="<?php echo get_permalink($next_post->ID); ?>">
                                      <?php echo $next_post->post_title; ?>
                                  </a>
                              </div>
                          @endif
                      </div>
                  </div>
              </div>
              <div class="post-sidebar">
                  @include('components.sidebar')
              </div>
          </div>
      </section>
  </main>
</article>
