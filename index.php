<?
if ("[tag:docid]"==1 ):
$_REQUEST['regionsId']=1;
$_REQUEST['region_url']="penza/";
elseif(RUB_ID==2 ):
$_REQUEST['regionsId']="[tag:docid]";
elseif(RUB_ID==4): //fild_id 34
$_REQUEST['regionsId']=get_field('parent_doc');
endif;
$region_from=" ".PREFIX."_document_fields AS t34,";
$region_where="(t34.document_id = a.id AND (t34.rubric_field_id = '34' AND t34.field_value ='[tag:docid]')) ";

$_REQUEST['regionsUrl']=rtrim(get_document("[tag:docid]", 'document_alias'),'/');
//Debug::_print($_REQUEST['regionsUrl']);
if($_REQUEST['regionsUrl']=='') {$_REQUEST['regionsUrl']="/penza/";}else{$_REQUEST['regionsUrl']= ABS_PATH.$_REQUEST['regionsUrl'].ABS_PATH;}
//Debug::_print($_REQUEST['regionsUrl']);
?>


<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <?
					eval('?>' . request_parse(
          'mainthreenews',
          array(

          'USER_WHERE' => $region_where,
          'USER_FROM' => $region_from ,
          'LIMIT' => 3,

          )
          ) . '
          <?');
					?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 no-phone">
        <div class="row">
          <div class="col-sm-12">
            <div class="mpage__indexnews">
              <div class="mpage__indexnews_rubname">
                Новости
              </div>
            </div>

            <div class="mpage-news-noimg">
              <div class="row">
                <?
								eval('?>' . request_parse(
                'mpage-news-noimg-one',
                array(

                'USER_WHERE' => $region_where,
                'USER_FROM' => $region_from ,
                'LIMIT' => 1,

                )
                ) . '
                <?');
								?>

                <?
								eval('?>' . request_parse(
                'mpage-news-noimg',
                array(

                'USER_WHERE' => $region_where,
                'USER_FROM' => $region_from ,
                'LIMIT' => 4,

                )
                ) . '
                <?');
								?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-10">
        <div class="row">
          <div class="col-md-3 mpage-col">
            <div class="row">
              <div class="col-md-12 col-6">
                [tag:sysblock:banner2]
              </div>
            </div>
            <div class="mpage__indexnews">
              <div class="mpage__indexnews_rubname">
                <a href="<?=$_REQUEST['regionsUrl'];?>lenta-novostej" style="color: #008D41;">Лента новостей</a>
              </div>
              <?
							eval('?>' . request_parse(
              'lenta',
              array(

              'USER_WHERE' => $region_where,
              'USER_FROM' => $region_from,
              'LIMIT' => 25,


              )
              ) . '
              <?');
							?>
            </div>
          </div>
          <div class="col-md-9 mpage-col">
            <a href="https://ombudsmanbis.pnzreg.ru" target="_blank" class="banner"><img src="/upload/ads/uppp.jpg"
                class="img-fluid" alt="" style="margin-bottom: 20px;"></a>
            <div class="row">
            </div>

            <div class="row ">
              <div class="col-sm-12">
                <div class="mpage__indexnews">
                  <div class="mpage__indexnews_rubname">
                    <a href="/nacproject">
                      Национальные проекты
                    </a>
                  </div>
                </div>

                <div class="row">

                  [tag:sysblock:nacprojects]

                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-12">

                <a href="/penza/narody-penzenskoj-oblasti"><img src="/upload/ads/narody.jpg" style="margin: 20px auto;"
                    class="img-responsive" alt="" /></a>

              </div>
            </div>


            <div class="row">
              <div class="col-sm-12">
                <div class="mpage__indexnews">
                  <div class="mpage__indexnews_rubname">
                    Сюжет
                  </div>
                </div>
                <div class="mpage-news-suget"
                  style="background: url(/upload/penza/suget/vac-corona.jpg) no-repeat center center;">
                  <div class="row">
                    <div class="col-12">
                      <div class="mpage-news-suget_head">
                        <a href="/novye-pravila-obracsheniya-s-tverdymi-bytovymi-othodami">
                          Вакцинация от COVID-19
                        </a>
                      </div>
                    </div>
                    [tag:request:suget]
                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-sm-12">
                <div class="mpage__indexnews">
                  <div class="mpage__indexnews_rubname">
                    Фоторепортажи
                  </div>
                </div>
              </div>
              [tag:request:mainFoto]
            </div>

            <div class="row">
              <div class="col-sm-12">
                <div class="mpage__indexnews">
                  <div class="mpage__indexnews_rubname">
                    Политика
                  </div>
                </div>

                <div class="mpage-news-noimg">
                  <div class="row">

                    <?
										eval('?>' . request_parse(
                    'news-noimg',
                    array(

                    'USER_WHERE' => $region_where."
                    AND (t11.document_id = a.id AND
                    (t11.rubric_field_id = '11' AND t11.field_number_value = 37))",
                    'USER_FROM' => $region_from.'
                    hzxhk_document_fields AS t11,',
                    'LIMIT' => 5 ,

                    )
                    ) . '
                    <?');
										?>

                  </div>
                </div>

              </div>
            </div>

            <div class="row">

              <div class="col-sm-12">
                <div class="mpage__indexnews">
                  <div class="mpage__indexnews_rubname">
                    Экономика
                  </div>
                </div>
              </div>

              <?
							eval('?>' . request_parse(
              6,
              array(

              'USER_WHERE' => $region_where." AND (t11.document_id = a.id AND (t11.rubric_field_id = '11' AND
              t11.field_number_value = UPPER('36')))",
              'USER_FROM' => $region_from.' hzxhk_document_fields AS t11,',
              'LIMIT' => 4 ,
              )
              ) . '
              <?');
							?>

            </div>

            <div class="row">
              <div class="col-sm-12">
                <div class="mpage__indexnews">
                  <div class="mpage__indexnews_rubname">
                    Общество
                  </div>
                </div>

                <div class="mpage-news-noimg">
                  <div class="row">

                    <?
										eval('?>' . request_parse(
                    7,
                    array(

                    'USER_WHERE' => $region_where." AND (t11.document_id = a.id AND (t11.rubric_field_id = '11' AND
                    t11.field_number_value = UPPER('35')))",
                    'USER_FROM' => $region_from.' hzxhk_document_fields AS t11,',
                    'LIMIT' => 5 ,
                    )
                    ) . '
                    <?');
										?>


                  </div>
                </div>

              </div>
            </div>

            <div class="row">

              <div class="col-sm-12">
                <div class="mpage__indexnews">
                  <div class="mpage__indexnews_rubname">
                    Спорт
                  </div>
                </div>
              </div>

              <?
							eval('?>' . request_parse(
              6,
              array(

              'USER_WHERE' => $region_where." AND (t11.document_id = a.id AND (t11.rubric_field_id = '11' AND
              t11.field_number_value = UPPER('34')))",
              'USER_FROM' => $region_from.' hzxhk_document_fields AS t11,',
              'LIMIT' => 4 ,
              )
              ) . '
              <?');
							?>

            </div>

            <div class="row">
              <div class="col-sm-12">
                <div class="mpage__indexnews">
                  <div class="mpage__indexnews_rubname">
                    Культура
                  </div>
                </div>

                <div class="mpage-news-noimg">
                  <div class="row">

                    <?
										eval('?>' . request_parse(
                    7,
                    array(

                    'USER_WHERE' => $region_where." AND (t11.document_id = a.id AND (t11.rubric_field_id = '11' AND
                    t11.field_number_value = UPPER('32')))",
                    'USER_FROM' => $region_from.' hzxhk_document_fields AS t11,',
                    'LIMIT' => 5 ,
                    )
                    ) . '
                    <?');
										?>

                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2">
      <div class="row">

        [tag:sysblock:sideRight]

      </div>
    </div>
  </div>
</div>
</div>
