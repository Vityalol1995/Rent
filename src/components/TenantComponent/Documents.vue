<template>
  <div class="Documents">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <div class="Documents_content">
            <div class="text Documents_text">Документы</div>
            <div class="title_second Documents_title">
              Ознакомьтесь с документами наших объектов
            </div>
            <div class="Documents_content-img">
              <img src="../../assets/icon/documents.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-12">
          <div class="row">
            <div class="col-sm-6 col-xs-12 Documents_item-wrapper">
              <a href="/file/doc1.docx" download="Общие_условия_проживания.docx" class="Documents_item">
                <div class="Documents_item-img">
                  <img src="../../assets/icon/doc.jpg" alt="">
                </div>
                <div class="Documents_item-text">
                  <div class="text">Общие условия проживания</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-xs-12 Documents_item-wrapper">
              <a href="/file/doc2.docx" download="Особые_условия_проживания.docx" class="Documents_item">
                <div class="Documents_item-img">
                  <img src="../../assets/icon/doc.jpg" alt="">
                </div>
                <div class="Documents_item-text">
                  <div class="text">Особые условия проживания</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-xs-12 Documents_item-wrapper">
              <a href="/file/doc3.doc" download="Договор_с_физ.лицами.doc" class="Documents_item">
                <div class="Documents_item-img">
                  <img src="../../assets/icon/doc.jpg" alt="">
                </div>
                <div class="Documents_item-text">
                  <div class="text">Договор с физ.лицами</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-xs-12 Documents_item-wrapper">
              <a href="/file/doc4.doc" download="Договор_с_юр.лицами.doc" class="Documents_item">
                <div class="Documents_item-img">
                  <img src="../../assets/icon/doc.jpg" alt="">
                </div>
                <div class="Documents_item-text">
                  <div class="text">Договор с юр.лицами</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-xs-12 Documents_item-wrapper">
              <a href="/file/doc5.pdf" download="Прайс-лист.pdf" class="Documents_item">
                <div class="Documents_item-img">
                  <img src="../../assets/icon/doc.jpg" alt="">
                </div>
                <div class="Documents_item-text">
                  <div class="text">Прайс-лист</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Documents'
}
</script>

<style lang="scss">
.Documents {
  padding: 50px 0 50px;
  .Documents_content {
    .Documents_text {
      margin-bottom: 24px;
    }
    .Documents_title {
      margin-bottom: 56px;
    }
    .Documents_content-img {
      max-width: 200px;
      img {
        width: 100%;
      }
    }
  }
  .Documents_item-wrapper {
    margin-bottom: 30px;
    .Documents_item {
      display: flex;
      padding: 15px 25px;
      border-radius: 6px;
      border: 1px solid #E9E9E9;
      height: 100%;
      margin-right: 18px;
      margin-left: 18px;
      text-decoration: none;
      align-items: center;

      .Documents_item-img {
        margin-right: 26px;
        max-width: 48px;
        img {
          width: 100%;
        }
      }
      .Documents_item-text {
        color: #000;
      }
    }
  }
}
@media (max-width: 1024px) {
  .Documents {
    .container {
      padding: 0;
      .Documents_content {
        .Documents_text {
        }
        .Documents_title {
        }
        .Documents_content-img {
          margin-bottom: 40px;
          img {
            width: 100%;
          }
        }
      }
    }
  }
}
@media (max-width: 500px) {
  .Documents {
    padding: 50px 0 0px;
    .Documents_item-wrapper {
      .Documents_item {
        padding: 15px 15px;
        margin-right: 10px;
        margin-left: 10px;

        .Documents_item-img {
          margin-right: 10px;
          max-width: 35px;
        }
        .Documents_item-text {
         .text {
           font-size: 14px;
         }
        }
      }
    }
  }
}
</style>
