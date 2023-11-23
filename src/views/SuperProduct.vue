<template>
  <div class="Product-Row">
    <Categories
      v-for="i in Categories"
      :key="i.Categories"
      :bg="i.bg"
      :ItemName="i.ItemName"
      :Img="i.Img"
      :ItemNumber="i.ItemNumber">
    </Categories>
  </div>
  <div class="Cards-Row">
    <Promotions
      v-for="i in Promotions"
      :key="i.Promotions"
      :bg="i.bg"
      :Img="i.Img"
      :Text="i.Text"
      :bgBtn="i.btncolor"
      :TextBtn="i.TextBtn" />
  </div>
</template>

<script>
import Categories from "../components/Categories.vue";
import Promotions from "../components/Promotions.vue";
import Button from "../components/Button.vue";
import Img from "../assets/images/Group 1.png";
export default {
  name: "SuperProject",
  components: {
    Categories,
    Promotions,
    Button,
  },

  data() {
    return {
      Categories: [
        {
          Img: "https://s3-alpha-sig.figma.com/img/8370/e915/8a586f746c0b10b70cd405c8aa1f2038?Expires=1701648000&Signature=UYhv-3GGZ~TIhGMgFt1ZkVyt96uNhauMRao5~5udYP68x68-brmOzvhj5Lk6Fc8b9J7RdRmALImLWIX~zax7cOi~qioCDvPe8RC-nhTSMzdLSrYGS4ZDH7LYRZmBqOCUpZiwicyG-nTRWn9nqQ8hnWE~pfSfjk2WwGA-rW8U9aJvh0MG6GKpU4T4XjN-D53tOxJYRgNbOvqpPh8DZHm4tr8upHDOlmL11xxfGF70ZzN70VglSq8GznzFIYsDu5V8CqUag-Eyc22BH2~1EIcHzzrCHsNeuaW3w93uPTgT0o1Lyakh2XdgtDw4UCPE3ZoJMs64i1IhR6jJtZ4f8tHb7g__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "rgba(242, 253, 228, 1)",
          ItemName: "Burger",
          ItemNumber: "14 Items",
        },
        {
          Img: "https://s3-alpha-sig.figma.com/img/fa19/6bce/6720167ebdfcf5d3f8a2d76053176f9a?Expires=1701043200&Signature=pJmjSAv83QimcuIG72nCNXlteOQAfTnga3FBqQAYSrQaYVGmTBOf6MZnPztVC6~7TSEazb1mNECezHkYjit02Y5mszQ5Gv6lfzgSiMmrllSqyhiZ6C9wx7P1DTJiltNv1lKqYD~z6jcnAQvcL7OxiLnLwKPozj1sSjXdEY8NV5nqy4nu03ZaOUh1DIZCXotAjC6Un0qr4mY8sQ5N1GnwUuZWipeHZ9mTWzXFYfWw2T3dG5RIjoE6uXREuWA4KYdDsMxYMANvr3fjNQp8yVQsllcJS47Det69Yw31CfmZ7TYCtVAOUTSx~A3VG9FM~Qdux4DUzPQwGv8d4wEEgYD4jw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "rgba(255, 252, 235, 1)",
          ItemName: "Peach",
          ItemNumber: "17 Items",
        },
        {
          Img: "https://s3-alpha-sig.figma.com/img/eb0a/46d6/bf3d30616b8cd69f4b03064fe254350c?Expires=1701043200&Signature=qByOdc2Q1X2NFdyrUeztm6EPT9VGoOX6aob66DaYigWyiPcDvDxDOD7qrj7~xlrj-69C8A1xlBY4F8B3FLi6UE~4COX72Nd3IotG3-cjazvOZkOK0yjv32bc4eN-2ravsCdu8avOdTqzciVATjspi57zfpVc-1BHUKxa9UsJOzzLwFwuv~C7sgwDMqhtaXLFCzKJLXsJ3s2pzqOTlU~VfnDkKIiUJDbG7dApsLWYxmf1V7Ajxh6x24ZDvDF6p-4MAVVgPWMC1XW93Y8sh9AfiltKhUdUw4USN3ImgDtWEsf0Qs54kbllOkGsTaHEfshWGoiwa2RRnlWe1jWu~ECA8Q__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "rgba(236, 255, 236, 1)",
          ItemName: "Oganic Kiwi",
          ItemNumber: "21 Items",
        },
        {
          Img: "https://s3-alpha-sig.figma.com/img/21b6/3a1e/f2a493eea176934bcab372692ab59a29?Expires=1701043200&Signature=gDrZIVRru4Xf7EFvOaJVa4zMaK34T89ooaYiiy0jHrv964HOgcNHySwHRI5tkzWDuLzCxG6-br~aNpZQg~UmRpJXt5s9njR2-BigWxO5MsyxH9KYjg9LZijaX7ytULJYu2MvLT1IRJrsU5n1xRrPrYZKf-AGOTymzm9ktMqPTe0UwT6PtEYQkVQCo71QGuV2g6AT3kTa8EwuslwSsamcDLB-5e9xa85jGRMRVvgTVdT1i4uvnHvo4TBfrH3fj1QFayytVdc~tBwW3SBRN2ZmTRnxDD-c1v4~mnvDKYrvNr9r-zoytKQZ~3IBqxh0juQdNIPFL3Wfobh2P-T5Z~lh3A__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "rgba(254, 239, 234, 1)",
          ItemName: "Red Apple",
          ItemNumber: "68 Items",
        },
        {
          Img: "https://s3-alpha-sig.figma.com/img/488c/b40d/98f6efd89c2347f8ab7f23b7757a7e2f?Expires=1701043200&Signature=ZTDPY7B01efjpBqFLuHwk~Pg5VXX0cxe9J3pgleHiJrNskdw4l5vtQOUUS9f~BS39NhifrWsQBJSdRmJ4ffGs3OWQYwy91Wi6LymiGCq5P02FAtTNL65RQRZs4P2CbHqnMp8QMzWMIbWXsMVDgA-obIjY2ARIjp9OtRN1O6s3eL5uYVmwOzTFNx0S6LZBjeDTRntin7~LEYoDUeqhb3xGyXpxeGSgUSRR9twcPdtmctH3q1Z2fz7sYMrDZCrUI8aY4-LXkZFLunBQQFCArSRpyhtEVFarrTxDGIywWSjkeG9QsVPv56RBxrOEKfvIsqp9vkBOwjc-I09vMysym8qEg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "rgba(255, 243, 235, 1)",
          ItemName: "Snack",
          ItemNumber: "34 Items",
        },
        {
          Img: "https://s3-alpha-sig.figma.com/img/13f9/afc8/02816b515e817bcd88800c49b947f860?Expires=1701043200&Signature=S7xJJ2tNncqoFtfs0z49egQAhXp68WqXLqkKTd6iNqcX3dBe4VXW~0su0UwkKM5UuZzel51xlYQARTxfk6WGSm7Ny~CDaaMnClTd6oB917Wf~5-ALMdJjPQ2Xw~6cWxFZdtoEGMFGVSmK0CN~OeQviLSaiV2txUMPV7WaY9onC6M3NaAw1t7J231BGpJQoNeshOhAWuaOwm0X5TBmRHvMdthLe0UgdvjRS009zbvz-VKZ0k2ySDZ~4lu6qZt1KLpYm7blzbEFANdKwuzO5AiaEdoFz4CRQre0Dh46pzNcj18eiCeAbI8SDc6kR3qi7ocvE0bIGe4kQdRsiJgszQfQQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "rgba(255, 243, 255, 1)",
          ItemName: "Black plum",
          ItemNumber: "25 Items",
        },
        {
          Img: "https://s3-alpha-sig.figma.com/img/5e6d/35bc/cc6f73e5412576546dca6b013f4fc9c7?Expires=1701043200&Signature=jU~KGSCuxDZGaLS4p~Vhsve5DzsdY4MRm-GTsUC3hEAfHAy1xS-k9MYt15epdPytx4i1LVIFYGe9Bwbb-05S~UozKrJXPGNLO5kvn6Ci2O76VuDsYGXlT~YIbykAhMo26jzKZL-Wjh1T1gW36~g1t~nAFzW0cCjjwS62SOdo7JqqfcoA3Wl~G839qkElsj1OI~tzTQ8jHk4mXwyZVtBvu4PugxCZhyqP1vbmgCIS8IBesU8ZcB-P10L1FH-ydo-QKfxFn02nAALdg9DUDQcqa5ivHktuspJfVCRaZFF911cSVYEUmH5RH9dIzdWRggtT1pn~sCYCEqlTMyiDprJVtw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "rgba(242, 252, 228, 1)",
          ItemName: "Vegetables",
          ItemNumber: "65 Items",
        },
        {
          Img: "https://s3-alpha-sig.figma.com/img/0ed9/44fa/3bcccc269ae2cadb2fb25ac9b02ea29e?Expires=1701043200&Signature=hrxIqePlHrVgOqGbOzXbpuZgoQl5KndljWGx5jMYf4gLll7Q~jR3fuRxAkwSRtkcComhPSR1UHNMurnw8fXV93jBJckQfXGBluo0A-dX9YEHEkmjtU6GSy~fc4m99cyUr82uaX2xoBW1h~qHFqHLEfH~fr12p471~VE5VO~oadkM6NbcFgHAkwPkjY~xLGvhjmSTJ03deKpSiwDEmV17TCntJvGfJrjg3LCQivogaZ8-CQQfyvpP5wwGScvRkQeeKMgQZ49wS8uYxd0X9l9hDO6NQhwjOQmq8uxHw4shPKfscaMxCMpRQin8r1RPKj-jC0eu4ipWU3gAG2uE1x2bDA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "rgba(255, 252, 235, 1)",
          ItemName: "Headphone",
          ItemNumber: "33 Items",
        },
        {
          Img: "https://s3-alpha-sig.figma.com/img/78c4/8886/688817c7c490b88407c4904743141184?Expires=1701043200&Signature=ku2-TlVzwdx8vQkO5evcQ9lYiZ7pa25hkkW~W8Q4dUamLcd79akJ3MAiaKJm1L1dBk9pRr5bHMkaL2QyDLuBam5P~ww2zQTjKYF9vb8m1c~ZKqxx2XzcO-ivWYaUNN2dy6qm1hTnErhQWVOpvXZ3Cb5IH3~zraXFob1Sa4IQH8Tpq7UJ4V462dFFdByy4rfa8~ws34AzoKn9QTGWKlaYZYOaUqyqI7n9z843StdY7QyjF4v382hFdccYx8WeIdKAanH9Ii~gj2E-pnmbPUzmSrwLQp4mhomR3lNM0mh-emOmuFjzrBHNOOAvdBs-gltESpCUi4stDgQucLmtwkwQjg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "rgba(242, 252, 228, 1)",
          ItemName: "Cake & Milk",
          ItemNumber: "54 Items",
        },
        {
          Img: "https://s3-alpha-sig.figma.com/img/aadc/a20d/2ca905cbdfec3bf306fbe70e1ca34a8a?Expires=1701043200&Signature=JxcqdQZEapxcGc0zHoFUSJ2YOsHK6I1G2x54vW-7pk2K1FJWR27dJrRhoXt3Xt6fcpIXJsCVBX-kS-83PcZTJb-XNIIoZdxJzjml~HLHKcDtXpNrj2DQzfjFDaIQhrdOgSg~j7mYmiFgexGhJtc8jfFWCExCVN7ekRGMrVbr7zIcBDNuCx-WDyTfGOA8YxMJLwU4G~plPCReD2kyUiIuGfNu2EAIVdnz0rTqx175IbGJfEBJMVaCUSY-MJQpv1eqNfmGCkUKu8KWWuYdGUmjJW-azdxcUvIoiMjl~rO7328PmpATd4jsjZdUScn3XAsYbn6gWKHFIt1GA4LGcVkbBg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "rgba(255, 243, 255, 1)",
          ItemName: "Orange",
          ItemNumber: "63 Items",
        },
      ],
      Promotions: [
        {
          Text: "Everyday Fresh & Clean with Our Products",
          Img: "https://s3-alpha-sig.figma.com/img/de8c/488a/87b9ce16acd7436a6dec758331c840bc?Expires=1701043200&Signature=KTQ6UT7xs25QzKumnJcNy7NIVYVdwgOUFSX~AUvPFz8514~r8UatAOz795d4E5JNCb97aRbueCvhTxnBO2P0rn-SQfilERq~DisE6dd~EML0Lt8IvBNG4COxhP0ou07cuCD6Rm-oMSZSv655jP1EHxdykfaB9YDcOyGQIId4~Y~9ZabZGP0IZ2UG~9tAdSKPkW1vbixUNzb30Oro-bhEPxpIhj93vFJZrUetetLqBynpiBfJ-bMSlJ2omjRU-n8K8cjxUbgRMkz8tEj~BenVCeXPVvCRoqnya7QP-jbi1FMhCSapp2KL8TVMAqLqCPtgAa0Ptb5lzsaWw-2Rp~8jUg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "rgba(240, 232, 213, 1)",
          btncolor: "rgba(59, 183, 126, 1)",
          TextBtn: "Shop Now",
        },
        {
          Text: "Make your Breakfast Healthy annd Easy",
          Img: Img,
          bg: "rgba(243, 232, 232, 1)",
          btncolor: "rgba(205, 50, 17, 1)",
          TextBtn: "Shop Now",
        },
        {
          Text: "The best Organic Products Online",
          Img: "https://s3-alpha-sig.figma.com/img/4d69/6151/8879bc373bf5fcc1578bcec5172b087b?Expires=1701043200&Signature=gtg1cO~4v5ZqoHMzDxg9miPzD8lTJ4w~pPhQJLKxSSQbcrVjPGE10797E8i~ouDnBAohwcPzDxjFG~m6yczt0gW01h-gVKAE-MX1sI5CyuAgRLyc3JgPMlUDOEmpLLlAyc4U2rhgD~JyEfVRP63vqYetTlaacTN2U8qZPTnS52SnTsE2jZ1eqont~HETHTJBk0OmvB99bB2MoL0Ic8a4q283M2Gyva5IvU7cNbD3l5hYONbRv2SImo1iGsGERVGyNMpC5f83YFG67dlyZgzDHRjtwsVbrWvTYpjopHOmwGIdFxp04qdGDlKbtWd~tq3hi15~HqDfLhq7rWaheo1meg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "rgba(231, 234, 243, 1)",
          btncolor: "rgba(253, 192, 64, 1)",
          TextBtn: "Shop Now",
        },
      ],
    };
  },
};
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@300;400;500;600;800&family=Quicksand:wght@400;600;700&display=swap");

.Product-Row {
  margin-top: 30px;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.Cards-Row {
  width: 100%;
  display: flex;
  justify-content: start;
  align-items: center;
}
</style>
