import * as React from 'react';
import { useTheme } from '@mui/material/styles';
import { LineChart, Line, XAxis, YAxis, Label, ResponsiveContainer } from 'recharts';
import Title from './Title';

// Generate Sales Data
function createData(week, amount) {
  return { week, amount };
}

const data = [
  createData('月曜', 63325),
  createData('火曜', 53285),
  createData('水曜', 48113),
  createData('木曜', 69021),
  createData('金曜', 154362),
  createData('土曜', 183621),
  createData('日曜', 123111),
];

export default function Chart() {
  const theme = useTheme();

  return (
    <React.Fragment>
      <Title>今週の予測売り上げ</Title>
      <ResponsiveContainer>
        <LineChart
          data={data}
          margin={{
            top: 16,
            right: 16,
            bottom: 0,
            left: 24,
          }}
        >
          <XAxis
            dataKey="week"
            stroke={theme.palette.text.secondary}
            style={theme.typography.body2}
          />
          <YAxis
            stroke={theme.palette.text.secondary}
            style={theme.typography.body2}
          />
          <Line
            isAnimationActive={false}
            type="monotone"
            dataKey="amount"
            stroke={theme.palette.primary.main}
            dot={false}
          />
        </LineChart>
      </ResponsiveContainer>
    </React.Fragment>
  );
}
