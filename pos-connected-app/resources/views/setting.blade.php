@extends('layouts.index')
@section("content")
    <div>
        <h2 class="page_head">Setting</h2>
        <div class="wrapper">
          <div class="flex__row__3_7">
            <div>
              <p>企業名</p>
            </div>
            <div>
              <p>xxxxxx居酒屋</p>
            </div>
          </div>
          <div class="flex__row__3_7">
            <div>
              <p>従業員コード</p>
            </div>
            <div>
              <p>1f10190243</p>
            </div>
          </div>
          <div class="flex__row__3_7">
            <div>
              <p>管理レベル</p>
            </div>
            <div>
              <p>root</p>
            </div>
          </div>
        </div>
        <div class="wrapper">
          <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="flex__row__between">
              <h4 class="order__category">管理権限変更</h4>
              <input type="submit" value="変更する" class="button">
            </div>
            <div class="spacer__vert__4"></div>
            <div class="line__hori"></div>
            <div class="spacer__vert__4"></div>
            <table class="order__table">
              <tr>
                  <th>名前</th>
                  <th>従業員コード</th>
                  <th>管理レベル</th>
                  <th>最終ログイン</th>
              </tr>
              <tr>
                  <td class="order__name">眞貝拓未</td><td>1f10190243</td>
                  <td>
                      <select>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                      </select>
                  </td>
                  <td>2021/12/31</td>
              </tr>
              <tr>
                  <td class="order__name">眞貝拓未</td><td>1f10190243</td>
                  <td>
                      <select>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                      </select>
                  </td>
                  <td>2021/12/31</td>
              </tr>
              <tr>
                  <td class="order__name">眞貝拓未</td><td>1f10190243</td>
                  <td>
                      <select>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                      </select>
                  </td>
                  <td>2021/12/31</td>
              </tr>
            </table>
          </form>
        </div>
    </div>
@endsection