import React, { PureComponent } from 'react';
import { PieChart, Pie, Legend, Tooltip, ResponsiveContainer } from 'recharts';
import Typography from '@mui/material/Typography';
import Grid from '@mui/material/Grid';
import Title from './Title';
import Link from '@mui/material/Link';

const drinks = [
  { name: 'ビール', value: 22 },
  { name: 'レモンサワー', value: 21 },
  { name: '金麦', value: 13 },
  { name: '緑茶杯', value: 9 },
  { name: '角杯', value: 6 },
  { name: 'カシスソーダ', value: 5 },
  { name: '豪快', value: 5 },
  { name: '白桃カルピス', value: 4 },
  { name: 'カシスオレンジ', value: 4 },
  { name: 'カシスウーロン', value: 4 },
  { name: 'ウーロンハイ', value: 3 },
  { name: 'ジンソーダ', value: 3 },
  { name: '白ワイン', value: 3 },
  { name: '赤ワイン', value: 3 },
  { name: 'ジムハイボール', value: 3 },
  { name: '男梅サワー', value: 3 },
];

const grilChickens = [
  { name: '胸スパイス', value: 13 },
  { name: 'モモタレ', value: 8 },
  { name: 'かわたれ', value: 8 },
  { name: 'やげん', value: 8 },
  { name: 'モモスパイス', value: 4 },
  { name: 'ムネタレ', value: 4 },
  { name: 'つくねチーズ', value: 3 },
  { name: '豚バラ', value: 3 },
  { name: 'ムネ塩', value: 2 },
  { name: '砂肝', value: 1 },
  { name: 'はつ', value: 1 },
  { name: 'かわ塩', value: 1 },
  { name: 'せせり', value: 1 },
];

const speedFoods = [
  { name: '枝豆', value: 12 },
  { name: 'キャベツ塩', value: 4 },
  { name: '味玉', value: 2 },
  { name: '塩だれキャベツ', value: 2 },
  { name: '冷やしトマト', value: 2 },
  { name: 'ねぎ塩昆布', value: 1 },
];

const foods = [
  { name: 'ソーセージ', value: 13 },
  { name: 'ポテトフライ', value: 12 },
  { name: 'とり天', value: 6 },
  { name: 'カマンベールコロッケ', value: 6 },
  { name: '山芋の鉄板焼き', value: 5 },
  { name: '唐揚げ', value: 4 },
  { name: 'ポテトサラダ', value: 4 },
  { name: 'チキン南蛮', value: 2 },
  { name: '鶏皮チップ', value: 1 },
];

function preventDefault(event) {
  event.preventDefault();
}

export default class ItemChart extends PureComponent {
  static demoUrl = 'https://codesandbox.io/s/two-simple-pie-chart-otx9h';

  render() {
    return (
      <React.Fragment>
      <Grid container spacing={0}>
        <Grid item xs={12}>
          <Title>商品別売上予測</Title>
        </Grid>
        <Grid item xs={3} display="flex" flexDirection="column">
            <Typography variant="body2" color="text.secondary" align="center">
              ドリンク
            </Typography>
            <ResponsiveContainer>
              <PieChart width={400} height={400}>
                <Pie
                  dataKey="value"
                  isAnimationActive={false}
                  data={drinks}
                  cx="50%"
                  cy="50%"
                  outerRadius={50}
                  fill="#8884d8"
                  label
                />
                <Pie dataKey="value" data={drinks} cx={500} cy={200} innerRadius={40} outerRadius={80} fill="#82ca9d" />
                <Tooltip />
              </PieChart>
            </ResponsiveContainer>
        </Grid>
        <Grid item xs={3} display="flex" flexDirection="column">
            <Typography variant="body2" color="text.secondary" align="center">
              焼き鳥
            </Typography>
            <ResponsiveContainer>
              <PieChart width={400} height={400}>
                <Pie
                  dataKey="value"
                  isAnimationActive={false}
                  data={grilChickens}
                  cx="50%"
                  cy="50%"
                  outerRadius={50}
                  fill="#8884d8"
                  label
                />
                <Pie dataKey="value" data={grilChickens} cx={500} cy={200} innerRadius={40} outerRadius={80} fill="#82ca9d" />
                <Tooltip />
              </PieChart>
            </ResponsiveContainer>
        </Grid>
        <Grid item xs={3} display="flex" flexDirection="column">
            <Typography variant="body2" color="text.secondary" align="center">
              スピードメニュー
            </Typography>
            <ResponsiveContainer>
              <PieChart width={400} height={400}>
                <Pie
                  dataKey="value"
                  isAnimationActive={false}
                  data={speedFoods}
                  cx="50%"
                  cy="50%"
                  outerRadius={50}
                  fill="#8884d8"
                  label
                />
                <Pie dataKey="value" data={speedFoods} cx={500} cy={200} innerRadius={40} outerRadius={80} fill="#82ca9d" />
                <Tooltip />
              </PieChart>
            </ResponsiveContainer>
        </Grid>
        <Grid item xs={3} display="flex" flexDirection="column">
            <Typography variant="body2" color="text.secondary" align="center">
              逸品
            </Typography>
            <ResponsiveContainer>
              <PieChart width={400} height={400}>
                <Pie
                  dataKey="value"
                  isAnimationActive={false}
                  data={foods}
                  cx="50%"
                  cy="50%"
                  outerRadius={50}
                  fill="#8884d8"
                  label
                />
                <Pie dataKey="value" data={foods} cx={500} cy={200} innerRadius={40} outerRadius={80} fill="#82ca9d" />
                <Tooltip />
              </PieChart>
            </ResponsiveContainer>
        </Grid>
        <Grid item xs={12} display="flex" flexDirection="row-reverse">
        <Link color="primary" href="#" onClick={preventDefault}>
          今後の売り上げ予測 ＞
        </Link>
        </Grid>
      </Grid>
      </React.Fragment>
    );
  }
}
