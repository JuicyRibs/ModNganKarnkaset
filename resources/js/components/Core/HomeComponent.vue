<template>
  <section>
    <section class="cid-rBPYu8gBku mbr-fullscreen mbr-parallax-background" id="header2-5">
      <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>

      <div class="container align-center">
        <div class="row justify-content-md-center">
          <div class="mbr-white col-md-10">
            <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">มดงานการเกษตร</h1>

            <p
              class="mbr-text pb-3 mbr-fonts-style display-5"
            >สินค้าและบริการทางการเกษตรครบวงจร จากบริษัทมดงานการเกษตร</p>
            <div class="mbr-section-btn">
              <a class="btn btn-md btn-primary display-7" href="index.html#info3-c">
                สินค้า
                <br />
              </a>
              <a class="btn btn-md btn-secondary display-7" href="index.html#info3-h">บริการ</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mbr-section content4 cid-rCl7v3JI8y" id="content4-i">
      <div class="container">
        <div class="media-container-row">
          <div class="title col-12 col-md-8">
            <h2
              class="align-center pb-3 mbr-fonts-style display-2"
            >สินค้าและบริการทางการเกษตรครบวงจร</h2>
            <h3
              class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"
            >รายการผลิตภัณฑ์และบริการ ล่าสุดจากมดงานการเกษตรไทย</h3>
          </div>
        </div>
      </div>
    </section>

    <section class="mbr-section info3 cid-rCl7oOAK9i mbr-parallax-background" id="info3-h">
      <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>

      <div class="container">
        <div class="row justify-content-center">
          <div class="media-container-column title col-12 col-md-10">
            <h2 class="align-left mbr-bold mbr-white pb-3 mbr-fonts-style display-2">บริการ</h2>
            <h3
              class="mbr-section-subtitle align-left mbr-light mbr-white pb-3 mbr-fonts-style display-5"
            >Service from us</h3>

            <div class="mbr-section-btn align-left py-4">
              <a v-on:click="getUrlService()" class="btn btn-primary display-4">ชมบริการทั้งหมด</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="services1 cid-rCl6JgpQ7y" id="services1-f">
      <!--Container-->
      <div class="container">
        <div class="row justify-content-center">
          <!--Titles-->
          <div class="title pb-5 col-12">
            <h2 class="align-left pb-3 mbr-fonts-style display-1">บริการล่าสุด</h2>
          </div>

          <three-product-component :itemType="'service'"></three-product-component>
        </div>
      </div>
    </section>

    <section class="mbr-section info3 cid-rCl5iV11MD mbr-parallax-background" id="info3-c">
      <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>

      <div class="container">
        <div class="row justify-content-center">
          <div class="media-container-column title col-12 col-md-10">
            <h2 class="align-left mbr-bold mbr-white pb-3 mbr-fonts-style display-2">สินค้า</h2>
            <h3
              class="mbr-section-subtitle align-left mbr-light mbr-white pb-3 mbr-fonts-style display-5"
            >Product from us</h3>

            <div class="mbr-section-btn align-left py-4">
              <a v-on:click="getUrlProduct()" class="btn btn-primary display-4">ชมสินค้าทั้งหมด</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="services1 cid-rCl5TV8PlF" id="services1-d">
      <!--Overlay-->

      <!--Container-->
      <div class="container">
        <div class="row justify-content-start">
          <!--Titles-->
          <div class="title pb-5 col-12">
            <h2 class="align-left pb-3 mbr-fonts-style display-1">
              สินค้าล่าสุด
              <br />
            </h2>
          </div>

          <three-product-component :itemType="'product'"></three-product-component>
        </div>
      </div>
    </section>
    <section>
      <div class="row">
        <div class="col-md-12 col-lg-6">
          <h1>กิจกรรมล่าสุดของบริษัทเรา</h1>
          <three-event-component :itemType="'event'"></three-event-component>
        </div>
        <div class="col-md-12 col-lg-6">
          <h1>ผลงานล่าสุดของบริษัทเรา</h1>
          <three-event-component :itemType="'activity'"></three-event-component>
        </div>
      </div>
    </section>
  </section>
</template>

<script>
export default {
  mounted() {
    history.pushState("", "", "/");
  },
  methods: {
    getUrlProduct() {
      window.location.href = "/product";
      return "";
    },
    getUrlService() {
      window.location.href = "/service";
      return "";
    }
  }
};
</script>
