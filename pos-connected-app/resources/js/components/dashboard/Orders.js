import * as React from 'react';
import Link from '@mui/material/Link';
import Table from '@mui/material/Table';
import TableBody from '@mui/material/TableBody';
import TableCell from '@mui/material/TableCell';
import TableHead from '@mui/material/TableHead';
import TableRow from '@mui/material/TableRow';
import Title from './Title';

// Generate Order Data
function createData(id, date, name, shop, amount, result) {
  return { id, date, name, shop, amount, result };
}

const rows = [
  createData(
    '2891',
    '2021年9月16日',
    "生樽",
    'カクヤス',
    2,
    4500,
  ),
  createData(
    '2892',
    '2021年9月16日',
    "レモンサワーの元",
    'カクヤス',
    2,
    2200,
  ),
  createData(
    '1231',
    '2021年9月16日',
    "枝豆",
    'スーパー',
    8,
    2300,
  ),
  createData(
    '1891',
    '2021年9月17日',
    "モモ20本",
    '焼き鳥屋',
    3,
    3297,
  ),
];

function preventDefault(event) {
  event.preventDefault();
}

export default function Orders() {
  return (
    <React.Fragment>
      <Title>次回の発注提案</Title>
      <Table size="small">
        <TableHead>
          <TableRow>
            <TableCell>期日</TableCell>
            <TableCell>商品</TableCell>
            <TableCell>発注先</TableCell>
            <TableCell>個数</TableCell>
            <TableCell align="right">金額</TableCell>
          </TableRow>
        </TableHead>
        <TableBody>
          {rows.map((row) => (
            <TableRow key={row.id}>
              <TableCell>{row.date}</TableCell>
              <TableCell>{row.name}</TableCell>
              <TableCell>{row.shop}</TableCell>
              <TableCell>{row.amount}</TableCell>
              <TableCell align="right">{`$${row.result}`}</TableCell>
            </TableRow>
          ))}
        </TableBody>
      </Table>
      <Link color="primary" href="#" onClick={preventDefault} sx={{ mt: 3 }}>
        詳細 ＞
      </Link>
    </React.Fragment>
  );
}
